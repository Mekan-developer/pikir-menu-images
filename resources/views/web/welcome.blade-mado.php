<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='shortcut icon' href="{{asset('icon/favicon.ico')}}" type='image/x-icon'>
  <title>Mado</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <style>
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuOKfMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuI6fMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 600;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuGKYMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuFuYMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 800;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuDyYMZg.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 900;
      font-display: swap;
      src: url(/fonts/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuBWYMZg.ttf) format('truetype');
    }
  </style>
</head>

<body>
  <script>
    window.locales = Object.keys(@json(LaravelLocalization::getSupportedLocales())); 
    window.storePhones = ["+99312 212177","+99312 212199","+99365 721200"];
    window.socials = [
        {
            localeKey: "Instagram",
            mediaText: "@madotm",
            url: "https://www.instagram.com/madotm",
        },
        {
            localeKey: "Tiktok",
            mediaText: "@madotm1",
            url: "https://www.tiktok.com/@madotm1/",
        },
    ];
    window.storeAdressLink = "https://maps.app.goo.gl/yuwTag4JsKrhyRMu5";
    window.storeAddress = {
      en: "Ashgabat city A. Niyazov and B. Turkmenistan avenue junction (Chekhov and Padvoyski) 'Arkadag' alley",
      tm: "Aşgabat şäheri A.Nyýazow we B.Türkmenistan şaýoly çatrygy(Çehow we Padwoýski) 'Arkadag' alleýa",
      ru: "г. Ашхабад перекресток проспектов А.Ниязова и Б.Туркменистана (Чехова и Падвойского) переулок 'Аркадаг'",
      tr: "Aşkabat şehri A. Niyazov ve B. Türkmenistan caddesi kavşağı (Çehov ve Padvoyski) 'Arkadağ' sokağı",

    }

  </script>

  <div id="com.ayegenmyradow"></div>

</body>

</html>