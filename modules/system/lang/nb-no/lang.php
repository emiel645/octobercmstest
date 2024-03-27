<?php return [
  'app' => [
    'name' => 'October CMS',
    'tagline' => 'Getting back to basics',
  ],
  'directory' => [
    'create_fail' => 'Kan ikke opprette mappen: :name',
  ],
  'file' => [
    'create_fail' => 'Kan ikke opprette filen: :name',
  ],
  'page' => [
    'invalid_token' => [
      'label' => 'Ugyldig sikkerhets-token',
    ],
  ],
  'combiner' => [],
  'system' => [
    'name' => 'System',
    'menu_label' => 'System',
    'categories' => [
      'cms' => 'CMS',
      'misc' => 'Div.',
      'logs' => 'Logger',
      'mail' => 'E-post',
      'shop' => 'Shop',
      'team' => 'Team',
      'users' => 'Brukere',
      'system' => 'System',
      'social' => 'Sosialt',
      'events' => 'Hendelser',
      'customers' => 'Kunder',
      'my_settings' => 'Mine innstillinger',
    ],
  ],
  'theme' => [
    'label' => 'Tema',
    'unnamed' => 'Tema uten navn',
    'name' => [],
  ],
  'themes' => [
    'install' => 'Installer tema',
    'installed' => 'Installerte temaer',
    'no_themes' => 'Det er ingen installerte temaer fra markedsplassen.',
    'recommended' => 'Anbefalt',
    'remove_confirm' => 'Vil du virkelig slette dette temaet?',
  ],
  'plugin' => [
    'label' => 'Plugin',
    'unnamed' => 'Plugin uten navn',
    'name' => [],
  ],
  'plugins' => [
    'enable_or_disable' => 'Aktivere eller deaktivere',
    'enable_or_disable_title' => 'Aktivere eller deaktivere plugins',
    'install' => 'Installer plugins',
    'install_products' => 'Installer produkter',
    'installed' => 'Installerte plugins',
    'no_plugins' => 'Det er ingen installerte plugins fra markedsplassen.',
    'recommended' => 'Anbefalt',
    'remove' => 'Fjern',
    'refresh' => 'Oppdater',
    'disabled_label' => 'Deaktivert',
    'disabled_help' => 'Deaktiverte plugins blir ignorert av applikasjonen.',
    'frozen_label' => 'Frys oppdaterionger',
    'frozen_help' => 'Fryste plugins blir ignorert ved oppdatering.',
    'selected_amount' => 'Valgte plugins: :amount',
    'remove_confirm' => 'Er du sikker?',
    'remove_success' => 'Plugins har blitt fjernet fra systemet.',
    'refresh_success' => 'Plugins har blitt oppdatert i systemet.',
    'disable_confirm' => 'Er du sikker?',
    'disable_success' => 'Plugins har blitt deaktivert.',
    'enable_success' => 'Plugins har blitt aktivert.',
  ],
  'project' => [
    'attach' => 'Tilkoble prosjekt',
    'detach' => 'Avkoble prosjekt',
    'none' => 'Ingen',
    'id' => [
      'missing' => 'Vennligst spesifiser en prosjekt-ID.',
    ],
    'detach_confirm' => 'Vil du virkelig avkoble dette prosjektet?',
    'unbind_success' => 'Prosjektet har blitt avkoblet.',
  ],
  'settings' => [
    'search' => 'Søk',
  ],
  'mail' => [
    'smtp_ssl' => 'SSL-tilkobling påkrevd',
  ],
  'mail_templates' => [
    'name_comment' => 'Unikt navn som tilknyttes denne layouten',
    'test_send' => 'Send testmelding',
    'test_confirm' => 'Sender testmelding til :email. Fortsette?',
    'creating' => 'Oppretter mal...',
    'creating_layout' => 'Oppretter layout...',
    'saving' => 'Lagrer mal...',
    'saving_layout' => 'Lagrer layout...',
    'delete_confirm' => 'Slette denne malen?',
    'delete_layout_confirm' => 'Slette denne layouten?',
    'deleting' => 'Sletter mal...',
    'deleting_layout' => 'Sletter layout...',
    'sending' => 'Sender testmelding...',
    'return' => 'Tilbake til mallisten',
  ],
  'install' => [],
  'updates' => [
    'plugin_author' => 'Utgiver',
    'plugin_not_found' => 'Plugin not found',
    'core_build' => 'Build :build',
    'core_build_help' => 'Siste build er tilgjengelig.',
    'themes' => 'Teamer',
    'plugin_version_none' => 'Ny plugin',
    'plugin_current_version' => 'Nåværende versjon',
    'theme_new_install' => 'Ny tema-installasjon.',
    'theme_extracting' => 'Pakker ut tema: :name',
    'update_label' => 'Oppdatér programvare',
    'update_loading' => 'Henter tilgjengelige oppdateringer...',
    'force_label' => 'Tving update',
    'found' => [
      'label' => 'Fant nye oppdateringer!',
      'help' => 'Klikk på Oppdatér programvare for å oppdatere.',
    ],
    'none' => [
      'label' => 'Ingen oppdateringer',
      'help' => 'Ingen nye oppdateringer ble funnet.',
    ],
    'important_action' => [
      'empty' => 'Velg handling',
      'confirm' => 'Bekreft oppdatering',
      'skip' => 'Hopp over plugin (bare denne gangen)',
      'ignore' => 'Hopp over plugin (alltid)',
    ],
    'important_action_required' => 'Velg handling',
    'important_view_guide' => 'Vis oppgraderingsguide',
    'important_alert_text' => 'Noen oppdateringer krever ettersyn.',
    'details_title' => 'Plugin detaljer',
    'details_view_homepage' => 'Vis nettside',
    'details_current_version' => 'Nåværende versjon',
    'details_author' => 'Forfatter',
  ],
  'server' => [
    'connect_error' => 'Kunne ikke koble til serveren.',
    'response_not_found' => 'Oppdateringsserveren ble ikke funnet.',
    'response_invalid' => 'Feilaktig respons fra serveren.',
    'response_empty' => 'Tom respons fra serveren.',
    'file_error' => 'Serveren kunne ikke levere pakken.',
    'file_corrupt' => 'Pakken fra serveren er korrupt.',
  ],
  'behavior' => [
    'missing_property' => 'Klassen :class må definere egenskapen $:property som brukes av :behavior -egenskapen.',
  ],
  'config' => [
    'not_found' => 'Fant ikke konfigurasjonsfilen :file definert for for :location.',
    'required' => 'Konfigurasjon brukt i :location må angi verdien \':property\'.',
  ],
  'zip' => [
    'extract_failed' => 'Kunne ikke pakke opp core-fil \':file\'.',
  ],
  'event_log' => [],
  'request_log' => [
    'empty_link' => 'Tøm forespørselslogg',
    'empty_loading' => 'Tømmer forespørselslogg...',
    'empty_success' => 'Forespørselsloggen er tømt.',
    'return_link' => 'Tilbake til forespørselslogg',
    'id' => 'ID',
  ],
  'permissions' => [
    'name' => 'System',
    'manage_system_settings' => 'Administrer systeminnstillinger',
    'manage_software_updates' => 'Administrer programvareoppdateringer',
    'access_logs' => 'Se systemlogger',
    'manage_mail_templates' => 'Administrer e-postmaler',
    'manage_mail_settings' => 'Administrer e-postinnstillinger',
    'manage_other_administrators' => 'Administrer andre administratorer',
  ],
  'media' => [
    'invalid_path' => 'Ugyldig filsti: \':path\'.',
    'folder_size_items' => 'fil(er)',
  ],
];