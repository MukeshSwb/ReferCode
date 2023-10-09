<?php
namespace App\Helpers;
use App\Models\Setting;
use App\Models\UserReferenceMapping;
use App\Models\UserWalletHistory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Helper{
    public static function fetchReferralAmount(){
        $setting = Setting::where('key','referralCode')->first();
        if(!empty($setting)){
            return $setting->value;
        }
        return 0;
    }

    public static function GenerateReferenceNumber($user){
        $random = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
        $uniqueKey = (strlen($user['id']) > 1) ? $user['id'].substr($user['first_name'],0,5).$random : '0'.$user['id'].substr($user['first_name'],0,5).$random;
        return $uniqueKey;
       
    }
    public static function UserReferenceMapping($referral_code,$userID){
        $Reference = User::select('id')->where("refer_code",$referral_code)->first();
        if(!empty($Reference)){
            UserReferenceMapping::create(['user_id'=> $userID,'reference_id' => $Reference->id]);
            
            UserWalletHistory::create(['user_id'=> $userID,'reference_id' => $Reference->id,'amount' =>self::fetchReferralAmount()]);
            return true;
        }
        return false;
    }

    public static function UserDailyEarning(){
        // Get the current date
        $today = Carbon::now()->format('Y-m-d');
        $totalEarnings =  UserWalletHistory::where('reference_id',Auth::user()->id)
                        ->whereDate('created_at', $today)
                        ->sum('amount');
        return $totalEarnings;
    }

    public static function UserTotalEarning(){
        $totalEarnings =  UserWalletHistory::where('reference_id',Auth::user()->id)
        ->sum('amount');
        return $totalEarnings;
    }

    public static function TotalDailyEarning(){
        $today = Carbon::now()->format('Y-m-d');
        $totalEarnings =  UserWalletHistory::whereDate('created_at', $today)
                        ->sum('amount');
        return $totalEarnings;
    }
    public static function TotalEarning(){
        $totalEarnings =  UserWalletHistory::sum('amount');
        return $totalEarnings;
    }
    public static function UserDetail($userId){
        $userDetail = User::find($userId);
        if(!empty($userDetail))
        {
            return $userDetail->toArray();
        }
        return [];
    }


}
?>