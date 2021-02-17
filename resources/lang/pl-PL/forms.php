<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    // Setup form fields
    'setup' => [
        'email'            => 'E-Mail',
        'username'         => 'Nazwa Użytkownika',
        'password'         => 'Hasło',
        'site_name'        => 'Nazwa strony',
        'site_domain'      => 'Domena',
        'site_timezone'    => 'Wybierz swoją strefę czasową',
        'site_locale'      => 'Wybierz swój język',
        'enable_google2fa' => 'Włącz weryfikację dwuetapową Google Authenticator',
        'cache_driver'     => 'Sposób przechowywania cache',
        'session_driver'   => 'Sposób przechowywania sesji',
        'mail_driver'      => 'Sposób wysyłania wiadomości e-mail',
        'mail_host'        => 'Adres hosta poczty',
        'mail_address'     => 'Nadawca wiadomości',
        'mail_username'    => 'Nazwa użytkownika poczty',
        'mail_password'    => 'Hasło użytkownika poczty',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Nazwa użytkownika lub e-mail',
        'email'         => 'E-Mail',
        'password'      => 'Hasło',
        '2fauth'        => 'Kod autoryzacyjny',
        'invalid'       => 'Nieprawidłowa nazwa użytkownika lub hasło',
        'invalid-token' => 'Nieprawidłowy token',
        'cookies'       => 'Musisz włączyć obsługę cookies, aby móc się zalogować.',
        'rate-limit'    => 'Przekroczono limit.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nazwa',
        'status'             => 'Status',
        'component'          => 'Komponent',
        'message'            => 'Nachricht',
        'message-help'       => 'Można użyć również języka znaczników.',
        'scheduled_at'       => 'When to schedule the maintenance for?',
        'incident_time'      => 'When did this incident occur?',
        'notify_subscribers' => 'Powiadomić subskrybentów?',
        'visibility'         => 'Widoczność zdarzenia',
        'public'             => 'Widoczne publicznie',
        'logged_in_only'     => 'Widoczne tylko dla zalogowanych użytkowników',
        'templates'          => [
            'name'     => 'Nazwa',
            'template' => 'Szablon',
            'twig'     => 'Szablony wydarzeń mogą korzystać z języka szablonów <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nazwa',
        'status'      => 'Status',
        'group'       => 'Gruppe',
        'description' => 'Beschreibung',
        'link'        => 'Link',
        'tags'        => 'Schlagwörter',
        'tags-help'   => 'Durch Kommata trennen.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'               => 'Nazwa',
            'collapsing'         => 'Choose visibility of the group',
            'visible'            => 'Zawsze rozwinięte',
            'collapsed'          => 'Domyślnie zwiń grupę',
            'collapsed_incident' => 'Zwiń grupę, ale rozwiń ją w razie problemów',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Nazwa',
        'suffix'           => 'Przyrostek',
        'description'      => 'Beschreibung',
        'description-help' => 'Można użyć również języka znaczników.',
        'display-chart'    => 'Pokazać diagram na stronie statusu?',
        'default-value'    => 'Warość domyślna',
        'calc_type'        => 'Obliczanie metryk',
        'type_sum'         => 'Suma',
        'type_avg'         => 'Średnia',
        'places'           => 'Miejsca dziesiętne',
        'default_view'     => 'Domyślny widok',
        'threshold'        => 'Ile minut przerwy między punktami metrycznymi?',

        'points' => [
            'value' => 'Wartość',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Nazwa strony',
            'site-url'               => 'Adres URL strony',
            'display-graphs'         => 'Pokazać wykresy na stronie statusu?',
            'about-this-page'        => 'Informacje o tej stronie',
            'days-of-incidents'      => 'Z ilu ostatnich dni pokazywać incydenty?',
            'banner'                 => 'Baner',
            'banner-help'            => 'Zaleca się, aby przesyłać pliki nie większe niż 930px szerokości.',
            'subscribers'            => 'Czy zezwolić użytkownikom na subskrypcje e-mail w celu otrzymywania powiadomień?',
            'automatic_localization' => 'Automatycznie tłumaczyć twoją stronę statusu na język odwiedzającego?',
        ],
        'analytics' => [
            'analytics_google'       => 'Kod Google Analytics',
            'analytics_gosquared'    => 'Kod GoSquared  Analytics',
            'analytics_piwik_url'    => 'Adres URL Twojego Piwika (bez http(s)://)',
            'analytics_piwik_siteid' => 'ID strony Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Strefa czasowa strony',
            'site-locale'          => 'Język strony',
            'date-format'          => 'Format daty',
            'incident-date-format' => 'Format daty przy zdarzeniach',
        ],
        'security' => [
            'allowed-domains'      => 'Dozwolone domeny',
            'allowed-domains-help' => 'Oddzielone przecinkami. Domena jest automatycznie ustawiona wyżej domyślnie, jako dozwolona.',
        ],
        'stylesheet' => [
            'custom-css' => 'Niestandardowy arkusz stylów',
        ],
        'theme' => [
            'background-color'        => 'Background Color',
            'background-fills'        => 'Wypełnianie tła (komponenty, zdarzenia, stopka)',
            'banner-background-color' => 'Kolor tła pod banerem',
            'banner-padding'          => 'Odstęp banera',
            'fullwidth-banner'        => 'Czy wyświetlać baner na pełnej szerokości?',
            'text-color'              => 'Text Color',
            'dashboard-login'         => 'Pokazywać przycisk panelu głównego w stopce?',
            'reds'                    => 'Czerwony (używany przy błędach)',
            'blues'                   => 'Niebieski (używany przy informacjach)',
            'greens'                  => 'Zielony (używany przy powodzeniu)',
            'yellows'                 => 'Żółty (używany przy ostrzeżeniach)',
            'oranges'                 => 'Pomarańczowy (używany przy ogłoszeniach)',
            'metrics'                 => 'Wypełnienie metryki',
            'links'                   => 'Łącza',
        ],
    ],

    'user' => [
        'username'       => 'Nazwa Użytkownika',
        'email'          => 'E-Mail',
        'password'       => 'Hasło',
        'api-token'      => 'Token API',
        'api-token-help' => 'Ponowne wygenerowanie nowego tokenu API spowoduje, że aplikacje korzystające obecnie z Cachet utracą do niego dostęp.',
        'gravatar'       => 'Zmień swój awatar na Gravatar.',
        'user_level'     => 'Poziom użytkownika',
        'levels'         => [
            'admin' => 'Administrator',
            'user'  => 'Użytkownik',
        ],
        '2fa' => [
            'help' => 'Włączenie weryfikacji dwuetapowej zwiększa bezpieczeństwo. Pobierz <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> lub podobną aplikację. Po zalogowaniu zostaniesz poproszony o podanie kodu wygenerowanego przez aplikację.',
        ],
        'team' => [
            'description' => 'Zaproś nowych członków do swojego zespołu. Wpisz ich adresy e-mail tutaj.',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Dodaj',
    'save'   => 'Zapisz',
    'update' => 'Zaktualizuj',
    'create' => 'Utwórz',
    'edit'   => 'Edytuj',
    'delete' => 'Usuń',
    'submit' => 'Prześlij',
    'cancel' => 'Anuluj',
    'remove' => 'Skasuj',
    'invite' => 'Zaproś',
    'signup' => 'Zarejestruj się',

    // Other
    'optional' => '* Opcjonalnie',
];
