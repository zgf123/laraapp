#laravel-laraapp

composer config -g repo.packagist composer https://packagist.phpcomposer.com
composer config -g --unset repos.packagist
composer config -g --unset repo.packagist
composer install

yarn config set registry https://registry.npm.taobao.org
yarn install
npm run watch-poll


composer require "mews/captcha:~2.0"
php artisan vendor:publish --provider="Mews\Captcha\CaptchaServiceProvider"


composer requrie "overtrue/laravel-lang:~3.0"
\Carbon\Carbon::setLocale('zh');


composer require intervention/image
php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravel5"


composer requrie "summerblue/generator:~0.5"
composer artisan make:scaffold Project --schema=""


composer require "barryvdh/laravel-debugbar:~3.1" --dev
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
'enabled' => env('APP_DEBUG', false),


composer require "hieu-le/active:~3.5"


composer require "mews/purifier:~2.0"
php artisan vendor:publish --provider="Mews\Purifier\PurifierServiceProvider"


composer require "guzzlehttp/guzzle:~6.3"
composer require "overtrue/pinyin:~3.0"


composer require "predis/predis:~1.0"
composer require "laravel/horizon:~1.0"
php artisan vendor:publish --provider="Laravel\Horizon\HorizonServiceProvider"


composer require "spatie/laravel-permission:~2.7"
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"


composer require "viacreative/sudo-su:~1.1"
app/Providers/AppServiceProvider.php
if (app()->isLocal()) {
    $this->app->register(\VIACreative\SudoSu\ServiceProvider::class);
}
php artisan vendor:publish --provider="VIACreative\SudoSu\ServiceProvider"


export EDITOR=vi
crontab -e
* * * * * php /home/vagrant/Code/larabbs/artisan schedule:run >> /dev/null 2>&1
使用键盘上的方向键将光标移动到最底端；
然后按键盘上的 『小写 o 键』进入 INSERT 模式；
黏贴上面这一行；
黏贴成功后按下键盘左上角的『ESC 键』进入 VI 的命令模式；
键盘输入 :wq 并敲击回车键保存退出。


"dingo/api": "2.0.0-alpha2"
composer require dingo/api:2.0.0-alpha2
composer update


composer require "overtrue/easy-sms"


composer require doctrine/dbal


composer require gregwar/captcha


composer require socialiteproviders/weixin