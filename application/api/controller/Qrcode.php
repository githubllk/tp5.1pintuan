<?php

namespace app\api\controller;

use app\api\controller\Controller;
use app\common\model\Setting;
use app\common\model\User as DealerUserModel;
use app\common\service\qrcode\Poster;

/**
 * 推广二维码
 * Class Order
 * @package app\api\controller\user\dealer
 */
class Qrcode extends Controller
{
    /* @var \app\api\model\User $user */
    private $user;
    private $updata;
    private $dealer;
    private $setting;

    /**
     * 构造方法
     * @throws \app\common\exception\BaseException
     * @throws \think\exception\DbException
     */
    public function initialize()
    {
        parent::initialize();
        // 用户信息
        $this->user = $this->getUser();
        // 分销商用户信息
        $this->dealer = DealerUserModel::detail($this->user['user_id']);
		
        // 分销商设置
        $this->setting = Setting::getAll();
    }

    /**
     * 获取推广二维码
     * @return array
     * @throws \app\common\exception\BaseException
     * @throws \think\exception\DbException
     * @throws \Exception
     * @throws \Exception
     */
    public function poster()
    {   
        $Qrcode = new Poster($this->dealer);
		
        return $this->renderSuccess([
            // 二维码图片地址
            'qrcode' => $Qrcode->getImage(),
            // 页面文字
            'words' => $this->setting['words']['values'],
        ]);
    }

}