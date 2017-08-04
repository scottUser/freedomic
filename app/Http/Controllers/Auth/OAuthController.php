<?php
/**
 * Created by Cao Jiayuan.
 * Date: 17-4-5
 * Time: 上午10:23
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\OAuth as OAuthUser;
use App\Utils\OAuth;

class OAuthController extends Controller
{
  public function login($type)
  {
    if (!in_array($type, ['qq', 'weibo', 'weixin'])) {
      return $this->respondNotFound();
    }
    $data = OAuth::getAuth($type);

    return view('oauth.success', $data);
  }

  public function info($type)
  {
    if (!in_array($type, ['qq', 'weibo', 'weixin'])) {
      return $this->respondNotFound();
    }
    $data = OAuth::getAuth($type);

    return $data;
  }

  public function page($type)
  {
    if (!in_array($type, ['qq', 'weibo', 'weixin'])) {
      return $this->respondNotFound();
    }

    return OAuth::goPage($type);
  }

  public function weixinPage()
  {
    return OAuth::goPage('weixin');
  }

  public function weixinLogin()
  {
    $data = OAuth::getAuth('weixin');

    $user = OAuthUser::firstOrCreate([
      'openid' => $data['openId']
    ], [
      'openid' => $data['openId'],
      'avatar' => $data['avatar'],
      'nickname' => $data['nickname']
    ]);

    \Auth::login($user);

    return view('oauth.success', $data);
  }
}