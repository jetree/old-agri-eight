＃初期設定
npm install
->npm run dev 
->sh: 1: cross-env: not found

package.jsonの
'cross.env' -> 'node node_modules/cross-env/dist/bin/cross-env.js'
書き換え

vagrant側（ゲストOSでなく）mac側(ホストOS)で
npm run watch
->自動リロードroutingの変更では変わらず、viewやcssの変更に対応

ゲスト側でlaravel/uiをインストール
composer require laravel/ui --dev

Vueの初期化
php artisan ui vue