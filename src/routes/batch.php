Route::get('/', function () {
    $faker = Faker\Factory::create('ja_JP');
    $dummyData = [
        'name' => $faker->name,
        'password' => $faker->password,
        'country' => $faker->country,
        'prefecture' => $faker->prefecture,
        'city' => $faker->city,
        'postcode' => $faker->postcode,
        'address' => $faker->address,
        'streetAddress' => $faker->streetAddress,
        'phoneNumber' => $faker->phoneNumber,
        'email' => $faker->email,
        'safeEmail' => $faker->safeEmail,   // (実在しないアドレスのため処理とかで使っても安心)
        'company' => $faker->company,
        'iso8601' => $faker->iso8601($max = 'now'),
        'dateTimeBetween' => $faker->dateTimeBetween($startDate = '-110 years', $endDate = 'now')->format('Y年m月d日'),
        'numberBetween' => $faker->numberBetween($min = 100, $max = 200),
        'title' => $faker->title,
        'realText' => $faker->realText($maxNbChars = 50, $indexSize = 2),
        'randomNumber' => $faker->randomNumber($nbDigits = 5),
        'randomFloat' => $faker->randomFloat($nbMaxDecimals = 4, $min = 0, $max = 5),
        'randomElement' => $faker->randomElement($array = ['男性', '女性']),
        'lexify' => $faker->lexify($string = '??????'),
        'hexcolor' => $faker->hexcolor,
        'ipv4' => $faker->ipv4,
        'url' => $faker->url,
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480, $category = 'cats', $randomize = true, $word = null),
        'userAgent' => $faker->userAgent,
        'creditCardType' => $faker->creditCardType,
        'creditCardNumber' => $faker->creditCardNumber,
        'creditCardExpirationDate' => $faker->creditCardExpirationDate,
        'isbn13' => $faker->isbn13,
        'isbn10' => $faker->isbn10
    ];
    var_dump($dummyData);
    exit();
});

array (size=31)
  'name' => string '中津川 翼' (length=13)
  'password' => string '$OP(vf:~' (length=8)
  'country' => string 'ハード島とマクドナルド諸島' (length=39)
  'prefecture' => string '愛知県' (length=9)
  'city' => string '高橋市' (length=9)
  'postcode' => string '4578842' (length=7)
  'address' => string '8904517  島根県中村市南区小林町三宅7-8-10 コーポ加納102号' (length=76)
  'streetAddress' => string '吉本町山本5-1-3' (length=20)
  'phoneNumber' => string '041-962-0940' (length=12)
  'email' => string 'yoshimoto.akira@mail.goo.ne.jp' (length=30)
  'safeEmail' => string 'akira.yoshimoto@example.com' (length=27)
  'company' => string '株式会社 若松' (length=19)
  'iso8601' => string '1996-09-05T04:41:39+0900' (length=24)
  'dateTimeBetween' => string '1950年03月07日' (length=17)
  'numberBetween' => int 200
  'title' => string 'Prof.' (length=5)
  'realText' => string 'って見えるやかせいに列れつの電燈でんといました。その上ではねをきちっとありました。私どもジョバンニ。' (length=150)
  'randomNumber' => int 44582
  'randomFloat' => float 1.3738
  'randomElement' => string '男性' (length=6)
  'lexify' => string 'mxjlzi' (length=6)
  'hexcolor' => string '#c84a8d' (length=7)
  'ipv4' => string '255.14.144.130' (length=14)
  'url' => string 'http://nagisa.com/' (length=18)
  'imageUrl' => string 'https://lorempixel.com/640/480/cats/?80273' (length=42)
  'userAgent' => string 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/5361 (KHTML, like Gecko) Chrome/40.0.806.0 Mobile Safari/5361' (length=105)
  'creditCardType' => string 'MasterCard' (length=10)
  'creditCardNumber' => string '6011044698805423' (length=16)
  'creditCardExpirationDate' => 
    object(DateTime)[806]
      public 'date' => string '2019-10-16 15:40:53.000000' (length=26)
      public 'timezone_type' => int 3
      public 'timezone' => string 'Asia/Tokyo' (length=10)
  'isbn13' => string '9789404568828' (length=13)
  'isbn10' => string '1271795167' (length=10)