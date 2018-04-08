<?php

namespace App\Http\Controllers\User;
require_once("lib/Tinify/Exception.php");
require_once("lib/Tinify/ResultMeta.php");
require_once("lib/Tinify/Result.php");
require_once("lib/Tinify/Source.php");
require_once("lib/Tinify/Client.php");
require_once("lib/Tinify.php");
use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ScanItemRequest;
use App\Http\Requests\TempLambRequest;
use App\Kiwifruit;
use App\ScannedItem;
use App\Spectrometer;
use App\TempLamb;
use App\Type;
use Google\Auth\Cache\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();

            $kiwifruits = Kiwifruit::where('user_id', $user->id)->get();
            $scannedItems = ScannedItem::where('user_id', $user->id)->get();
            $tempLambs = [];
            foreach ($scannedItems as $scannedItem) {
                $tempLambs[] = TempLamb::where('scanned_item_id', $scannedItem->id)->get();
            }

            return view('pages.user.index', ['kiwifruits' => $kiwifruits, 'scannedItems' => $scannedItems, 'tempLambs' => $tempLambs
            ]);
        } else {
            return view('pages.user.index');
        }
    }

    public function getUpload()
    {
        if(!Auth::check()){
            return view('pages.user.auth.signin');
        }
        $meatID = Type::where('name', 'MEAT')->first()->id;
        $superID = Type::where('name', 'SUPER')->first()->id;
        if(Auth::user()->type == $meatID) {
            $types = Type::where('type', Type::where('name', 'MEAT')->first()->id)->get();
            $meat = true;
        } elseif(Auth::user()->type == $superID){
            $types = Type::where('id','!=', 1)->get();
            $meat = true;
        } else {
            $types = Type::find(Auth::user()->type);
            $meat = false;
        }
        return view('pages.user.upload', ['types' => $types, 'meat' => $meat]);
    }

    public function postUpload(ScanItemRequest $request)
    {
        if ($request->file('image') !== null) {
            $path = 'images/' . time() . '.' . $request->image->getClientOriginalExtension();
            \Tinify\setKey("cRBOIBNVcVK-m_wvOYOFGaErQSkvEIkZ");
            $resizedImage = \Tinify\fromFile($request->image)->resize(array(
                'method' => "scale",
                'width' => 200
            ))->toFile($path);

            ScannedItem::create([
                'name' => $request->name,
                'spectrometer_id' => Spectrometer::where('name', 'NIRScan')->first()->id,
                'image' => $path,
                'type' => $request->type,
                'user_id' => Auth::user()->id,
                'cut_location' => $request->location,
                'other_information' => $request->information
            ]);
            $user = Auth::user();
            $kiwifruits = Kiwifruit::where('user_id', $user->id)->get();
            $scannedItems = ScannedItem::where('user_id', $user->id)->get();
            $tempLambs = [];
            foreach ($scannedItems as $scannedItem) {
                $tempLambs[] = TempLamb::where('scanned_item_id', $scannedItem->id)->get();
            }
            return redirect()->back()->with('message', 'Successfully add new study');
        } else {
            return back();
        }

    }

    public function getUploadFile()
    {
        if(!Auth::check()){
            return view('pages.user.auth.signin');
        }
        $scanned_items = ScannedItem::where('user_id', Auth::user()->id)->get();
        return view('pages.user.uploadfile', ['scanned_items' => $scanned_items]);
    }

    public function postUploadFile(TempLambRequest $request)
    {
        if ($request->fileToUpload !== null) {
            for ($i = 0; $i < count($request->fileToUpload); $i++) {
                if (isset($request->fileToUpload[$i])) {
                    $filename = time() . $i . '.' . $request->fileToUpload[$i]->getClientOriginalExtension();
                    $request->fileToUpload[$i]->move(public_path('csv'), $filename);
                    TempLamb::create([
                        'name' => $request->nameOfFile,
                        'excel_file' => 'csv/' . $filename,
                        'scanned_item_id' => $request->item
                    ]);
                } else {
                    return back();
                }
            }
            $user = Auth::user();
            $kiwifruits = Kiwifruit::where('user_id', $user->id)->get();
            $scannedItems = ScannedItem::where('user_id', $user->id)->get();
            $tempLambs = [];
            foreach ($scannedItems as $scannedItem) {
                $tempLambs[] = TempLamb::where('scanned_item_id', $scannedItem->id)->get();
            }

            return view('pages.user.filedetail', ['scanned_item_id' => $request->item]);
        } else {
            return back();
        }
    }

    public function getUploadID($id)
    {
        return view('pages.user.filedetail', ['scanned_item_id' => $id]);
    }

    public function searchjson(){
        $file= TempLamb::find(34)->excel_file;
        $csv= file_get_contents($file);

        $array = array_map("str_getcsv", explode("\n", $csv));

        $json = json_encode($array);
        print_r($json);
    }

    public function getContact(){
        return view('pages.user.contact');
    }

    public function postContact(ContactRequest $request){
        $contact = Contact::create($request->all());
        $to = 'tuananh191194@gmail.com';
        $subject = $contact->subject;
        $phone = $contact->phone;
        $email = $contact->email;
        $name = $contact->name;
        $mess = $contact->message;
        $exception = 'sdf';
        Mail::send('pages.user.mail', ['subject' => $subject, 'name' => $name, 'mess' => $mess , 'phone' => $phone, 'email' => $email], function ($message) {
            $message->to('tuananh191194@gmail.com', 'harvey.ho@auckland.ac.nz', 'harvey.nz@gmail.com')->subject('New contact submission from nir-data.com');
        });
        return view('pages.user.getcontact');
    }

    public function search(){
        return view('pages.user.search');
    }

    public function postSearch(Request $request){
        $items = ScannedItem::whereDate('created_at', '>=', $request->start_date)->where('created_at', '<=' ,$request->end_date)->get();

        return view('pages.user.postSearch', ['items' => $items]);
    }
}
