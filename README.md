# でーとる 〜今日は誰とデートする？〜
デート管理SNSです。

マッチングアプリが活況であり、女性とのデートも手軽に行える時代になってきました。

何人の女性とデートをする友人からヒントを得て、デートを管理し友人と共有できるアプリを作りました。

レスポンシブ対応しており、スマホからでもご覧頂けます。


<img width="1415" alt="スクリーンショット" src="https://github.com/DJMasaru/date-le-frontend/assets/91363928/b8160b77-f082-452b-8f95-9a2899347e8a">

<img width="375" alt="スクリーンショット" src="https://github.com/DJMasaru/date-le-frontend/assets/91363928/4bf2bb19-3039-47da-ae0e-1c1808c107cb">

# URL
https://main.d2fv1fmmujqt0y.amplifyapp.com/login

「ゲストログインはこちら」からお入りください。

ユーザー情報として

ID：example@example.example　PW：exampleexample

ID：example@masaki.example　PW：exampleexample

ID：example@shinya.example　PW：exampleexample

でもログインできます。

# 使用技術

・TypeScript 5.0.4(Next.js 13.4.4)

　⚪︎Chakra UI

・PHP 8.8.10(Laravel 10.13.0)

・AWS

　⚪︎AWS Amplify

　⚪︎AWS S3

・Railway.app

　⚪︎MySQL 8.1.0

# 構成図

<img width="650" alt="スクリーンショット 2023-09-02 16 43 30" src="https://github.com/DJMasaru/date-le-frontend/assets/91363928/f12e5e31-5f65-404e-9077-7c5d258242de">


# 機能一覧

・ユーザー登録機能

・ログイン機能

・デート情報登録機能（ダッシュボードに表示される情報）

・デート情報に対するコメント機能

・女の子情報一覧確認機能

・女の子情報詳細確認/編集/削除機能

・女の子情報詳細確認画面からデート情報登録できる機能

・デート履歴確認機能（Laravelでcron処理を行わせ終了したデート情報を削除しこちらのテーブルに登録し直す）

・フォロー/フォローリクエスト、フォロワー/被フォローリクエスト機能

・友達情報詳細確認機能

・接点のない人の検索機能

・自身のプロフィール編集/削除機能


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
