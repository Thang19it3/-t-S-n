<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Student;
use App\Owner;
use App\Pitch;
use App\SubPitch;
use App\Booking;
use DB; 
use Session;
use Auth;
class SoccerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewThongtinsan($id)
    {
        $pitch = DB::table('pitch')->where('pitch_id',$id)->get();
        return view('thongtinsan',['pitch'=>$pitch]);
    }
    public function viewTimsan()
    {
        $pitch = DB::table('pitch')->paginate(10);
        return view('timsan')->with('pitch',$pitch);
    }
    public function viewProfile()
    {
        return view('profile');
    }
    public function viewLogin()
    {
        return view('dang-nhap');
    }
    public function viewDangky()
    {
        return view('dang-ky');
    }
    public function search5()
    {
        $pitch = DB::table('pitch')->where('size','5')->paginate(10);
        return view('timsan')->with('pitch',$pitch);
    }
    public function search7()
    {
        $pitch = DB::table('pitch')->where('size','7')->paginate(10);
        return view('timsan')->with('pitch',$pitch);
    }
    public function search11()
    {
        $pitch = DB::table('pitch')->where('size','11')->paginate(10);
        return view('timsan')->with('pitch',$pitch);
    }
    public function viewDatsan(Request $request,$id)
    {
        $pitch = DB::table('pitch')->where('pitch_id',$id)->get();
        $booking = DB::table('booking')->join('pitch', 'booking.pitch_id', '=', 'pitch.pitch_id')->select('pitch_name')->where('user_id',Auth::user()->id)->get();
        $time = $request->begin_time;
        $end_time = $request->end_time;
        $date = $request->date;
        $day = $request->day;
        $duration = $request->duration;
        return view('dat-san')->with(['pitch' => $pitch, 'time'=>$time, 'end_time'=>$end_time, 'date' => $date, 'day' => $day, 'duration' => $duration, 'booking' => $booking]);
    }
    public function resetPassword()
    {
        return view('reset-password');
    }
    public function set_pitch(Request $request)
    {
        $newBooking = new Booking;
        $ticket = str::random(4);
        $newBooking->user_id = Auth::user()->id;
        $newBooking->pitch_id = $request->pitch_id;
        $newBooking->owner_id = $request->owner_id;
        $newBooking->book_day = $request->book_day;
        $newBooking->start_time_booking = $request->start_time;
        $newBooking->end_time_booking = $request->end_time;
        $newBooking->is_verified = $request->is_verified;
        $newBooking->ticket = $ticket;
        $newBooking->total_price = $request->total_price;
        $newBooking->today = $request->today;
        $newBooking->save();

        $booking = DB::table('booking')->get();
        $pitch = DB::table('pitch')->join('booking','pitch.pitch_id','=','booking.pitch_id')->where('ticket','like',$newBooking->ticket)->get();
        return view('dat-san-buoc-2')->with(['pitch'=>$pitch, 'booking'=>$booking]);
    }
    public function search_booking(Request $request)
    {
        $key = $request->search;
        if($key != null)
            $booking = DB::table('booking')->join('pitch','booking.pitch_id','=','pitch.pitch_id')->join('users','booking.user_id','=','users.id')->where('ticket','like',$key)->orWhere('pitch_name','like',$key)->orWhere('name','like',$key)->paginate(10);
        else {
            $booking = DB::table('booking')->join('pitch','booking.pitch_id','=','pitch.pitch_id')->join('users','booking.user_id','=','users.id')->where('booking.owner_id',Auth::guard('owner')->id())->paginate(10);
        }
        return view('chu-san/quan-ly',['booking' => $booking]);
    }
    public function search_pitch(Request $request) {
        $key = $request->pitch_name_search;
        if($key != null) {
            $pitch = DB::table('pitch')->where('pitch_name','like',$key)->orWhere('district','like',$key)->paginate(10);
        } else {
            $pitch = DB::table('pitch')->paginate(10);
        }
        return view('timsan')->with('pitch',$pitch);
    }
    public function quanLy()
    {
        $booking = DB::table('booking')->join('pitch','booking.pitch_id','=','pitch.pitch_id')->join('users','booking.user_id','=','users.id')->where('booking.owner_id',Auth::guard('owner')->id())->paginate(10);
        return view('chu-san/quan-ly',['booking' => $booking]);
    }
    public function favUser()
    {
        return view('chu-san/fav-user');
    }
    public function viewOwner()
    {
        return view('chu-san/owner');
    }
    public function viewSport_profile()
    {
        return view('sport_profile');
    }
    public function viewBooking_request() {
        $booking_request = DB::table('pitch')->join('booking','pitch.pitch_id','=','booking.pitch_id')->where('user_id',Auth::user()->id)->paginate(10);
        return view('booking_request',['booking' => $booking_request]);
    }
    public function viewChange_password() {
        return view('change_password');
    }
    public function viewLogin_owner() {
        return view('dang-nhap-chu-san');
    }
    public function viewInfo() {
        $pitch = DB::table('pitch')->where('owner_id',Auth::guard('owner')->id())->paginate(10);
        return view('chu-san/chi-tiet-san')->with('pitch',$pitch);
    }
    public function user_update(Request $request) {
        $id = Auth::user()->id;
        $new = DB::table('users')->where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'birthday' => $request->birthday
        ]);
        return redirect('profile');
    }
    public function update_pass(Request $request) {
        $id = Auth::user()->id;
        $new = DB::table('users')->where('id',$id)->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect('profile');
    }
    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (Auth::guard('owner')->attempt($arr)) {
            return redirect('quan-ly');
        } else {
            Session::flash('error', 'Sai email hoặc mật khẩu');
            return redirect('login-owner');
        }
    }
    public function add_pitch(Request $request) {
        $id = Auth::guard('owner')->id();

        $newPitch = new Pitch;
        $newPitch->pitch_name = $request->pitch_name_new; 
        $newPitch->description = $request->des_new;
        $newPitch->owner_id = $id;
        $newPitch->city = $request->city_new;
        $newPitch->district = $request->district_new;
        $newPitch->address = $request->address_new;
        $newPitch->phone_number = $request->phone_new;
        $newPitch->url_ggmap = $request->url_ggmap_new;
        $newPitch->start_time = $request->start_time_new;
        $newPitch->end_time = $request->end_time_new;
        $newPitch->size = $request->size_new;
        $newPitch->price_per_hour = $request->price_per_hour_new;
        $newPitch->avatar_url = $request->image_new;
        $newPitch->save();

        return redirect('chi-tiet');
    }
    public function update_pitch(Request $request, $id) {
        $new = DB::table('pitch')->where('pitch_id',$id)->update([
            'pitch_name' => $request->pitch_name,
            'description' => $request->des,
            'city' => $request->city,
            'district' => $request->district,
            'address' => $request->address,
            'phone_number' => $request->phone,
            'start_time' => $request->start_time,
            'url_ggmap' => $request->url_ggmap,
            'end_time' => $request->end_time,
            'price_per_hour' => $request->price_per_hour,
            'size' => $request->size,
            'avatar_url' => $request->image

        ]);
        return redirect('chi-tiet');
    }

    public function delete_booking($id) {
        $delete = Booking::find($id);
        $delete->delete();
        return redirect()->back();
    }
    public function huy_booking($id) {
        $booking = Booking::find($id);
        $booking->is_verified = 2;
        $booking->save();
        return redirect()->back();
    }
    public function submit_booking($id) {
        $booking = Booking::find($id);
        $booking->is_verified = 1;
        $booking->save();
        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
