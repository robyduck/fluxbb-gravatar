<?php
// Definizioni di lingua usate in admin-groups.php
/* Traduzione di: Oscon.it */
$lang_admin_groups = array(

'Must enter title message'		=>	'Inserire il nome di un gruppo.',
'Title already exists message'	=>	'&Egrave; gi&agrave; presente un gruppo col nome <strong>%s</strong>.',
'Default group redirect'		=>	'Gruppo predefinito impostato. Reindirizzamento &hellip;',
'Cannot remove default message'	=>	'Il gruppo predefinito non pu&ograve; essere cancellato. Per cancellarlo, &egrave; necessario impostare precedentemente un altro gruppo predefinito.',
'Group removed redirect'		=>	'Grouppo cancellato. Reindirizzamento &hellip;',
'Group added redirect'			=>	'Grouppo aggiunto. Reindirizzamento &hellip;',
'Group edited redirect'			=>	'Grouppo modificato. Reindirizzamento &hellip;',

'Add groups head'				=>	'Aggiungi/imposta gruppi',
'Add group subhead'				=>	'Aggiungi gruppo',
'New group label'				=>	'Basa il nuovo gruppo su',
'New group help'				=>	'Selezionare un gruppo utenti come base da cui ereditare permessi e impostazioni. La pagina successiva permetter&agrave; la gestione di ulteriori opzioni.',
'Default group subhead'			=>	'Imposta gruppo predefinito',
'Default group label'			=>	'Gruppo predefinito',
'Default group help'			=>	'Questo &egrave; il gruppo predefinito, quello nel quale gli utenti vengono inseriti alla registrazione. Per ragioni di sicurezza non &egrave; possibile inserire automaticamente gli utenti n&eacute; nel gruppo amministratori n&eacute; moderatori.',
'Existing groups head'			=>	'Gruppi',
'Edit groups subhead'			=>	'Modifica/cancella gruppi',
'Edit groups info'				=>	'I gruppi predefiniti (Ospiti, Amministratori, Moderatori e Utenti) non possono essere rimossi, ma solo modificati. Ad alcuni gruppi certe operazioni non sono consentite (esempio: la modifica dei messaggi per gli Ospiti). Gli amministratori hanno sempre pieni permessi.',
'Edit link'						=>	'Modifica',
'Delete link'					=>	'Cancella',
'Group delete head'				=>	'Cancellazione gruppo',
'Confirm delete subhead'		=>	'Confirma cancellazione gruppo',
'Confirm delete info'			=>	'Sei sicuro di voler cancellare il gruppo <strong>%s</strong>?',
'Confirm delete warn'			=>	'ATTENZIONE! La cancellazione &egrave; definitiva.',
'Delete group head'				=>	'Cancella gruppo',
'Move users subhead'			=>	'Sposta gli utenti nel gruppo',
'Move users info'				=>	'Il gruppo <strong>%s</strong> ha <strong>%s</strong> membri. Seleziona un gruppo al quale assegnare i membri al momento della cancellazione.',
'Move users label'				=>	'Sposta utenti a',
'Delete group'					=>	'Cancella gruppo',

'Group settings head'			=>	'Impostazioni gruppo',
'Group settings subhead'		=>	'Imposta le opzioni e i permessi',
'Group settings info'			=>	'Le funzionalit&agrave; e i permessi predefiniti sono quelli del gruppo utenti, e sono applicati solo se non sono impostati permessi specifici.',
'Group title label'				=>	'Nome del gruppo',
'User title label'				=>	'Nome utente',
'User title help'				=>	'Il rango degli utenti che hanno raggiunto questo gruppo. Lasciare in bianco per utilizzare il titolo di default ("%s").',
'Promote users label'			=>	'Promuovi utenti',
'Promote users help'			=>	'Puoi promuovere utenti ad un nuovo gruppo automaticamente se hanno raggiunto un certo numero di messaggi. Selezione "%s" per disabilitare. Per ragioni di sicurezza, non puoi selezionare un gruppo amministratori. Inoltre nota che il nuovo gruppo diventer&agrave; effettivo all\'invio di un messaggio successivo da parte dell\'utente.',
'Disable promotion'				=>	'Disabilita promozione',
'Mod privileges label'			=>	'Attiva i privilegi di moderatore',
'Mod privileges help'			=>	'Per utilizzare i privilegi da moderatore, l\'utente deve essere assegnato alla moderazione di uno o pi&ugrave; forum tramite la pagina di amministrazione nel suo profilo utente.',
'Edit profile label'			=>	'Permette ai moderatori di modificare i profili utente',
'Edit profile help'				=>	'Se i privilegi di moderatore sono attivi, permetti agli utenti in questo gruppo la modifica dei profili utente.',
'Rename users label'			=>	'Permette ai moderatori di modificare i nomi utente',
'Rename users help'				=>	'Se i privilegi di moderatore sono attivi, permetti agli utenti in questo gruppo la modifica dei nomi utente.',
'Change passwords label'		=>	'Permette ai moderatori di modificare le password utente',
'Change passwords help'			=>	'Se i privilegi di moderatore sono attivi, permetti agli utenti in questo gruppo la modifica delle password utente.',
'Ban users label'				=>	'Permette ai moderatori di interdire gli utenti',
'Ban users help'				=>	'Se i privilegi di moderatore sono attivi, permetti agli utenti in questo gruppo di interdire gli utenti.',
'Read board label'				=>	'Visualizzazione dei forum',
'Read board help'				=>	'Permette agli utenti di questo gruppo di visualizzare i forum. Questa impostazione si applica all\'intero sistema e non &egrave; perci&ograve; influenzata dalle impostazioni individuali per ciascun forum. Se impostata su "No", gli utenti potranno solo accedere/uscire e registrarsi senza compiere altra azione.',
'View user info label'			=>	'Visualizza informazioni utente',
'View user info help'			=>	'Permette agli utenti di questo gruppo di visualizzare la lista utenti e le pagine di profilo.',
'Post replies label'			=>	'Pubblicazione messaggi',
'Post replies help'				=>	'Permette agli utenti di questo gruppo di pubblicare messaggi nelle discussioni.',
'Post topics label'				=>	'Pubblicazione discussioni',
'Post topics help'				=>	'Permette agli utenti di questo gruppo di aprire nuove discussioni.',
'Edit posts label'				=>	'Modifica messaggi',
'Edit posts help'				=>	'Permette agli utenti di questo gruppo di modificare i propri messaggi.',
'Delete posts label'			=>	'Cancellazione messaggi',
'Delete posts help'				=>	'Permette agli utenti di questo gruppo di cancellare i propri messaggi.',
'Delete topics label'			=>	'Cancellazione discussioni',
'Delete topics help'			=>	'Permette agli utenti di questo gruppo di cancellare le proprie discussioni (inclusi gli eventuali messaggi contenuti).',
'Post links label'				=>	'Collegamenti messaggio',
'Post links help'				=>	'Permetti agli utenti di questo gruppo di includere collegamenti nei loro messaggi. Questa impostazione sar&agrave; applicata alla firma e al campo sito web nel profilo utente.',
'Set own title label'			=>	'Impostazione del titolo personale',
'Set own title help'			=>	'Permette agli utenti di questo gruppo di impostare un proprio titolo utente (che apparir&agrave; sotto il nome).',
'User search label'				=>	'Utilizzo delle ricerche',
'User search help'				=>	'Permette agli utenti di questo gruppo di utilizzare le funzioni di ricerca.',
'User list search label'		=>	'Richerche dei nomi utente',
'User list search help'			=>	'Permette agli utenti di questo gruppo di utilizzare le funzioni di ricerca della lista utenti.',
'Send e-mails label'			=>	'Invio email',
'Send e-mails help'				=>	'Permette agli utenti di questo gruppo di spedire email ad altri utenti.',
'Post flood label'				=>	'Intervallo tra le pubblicazioni',
'Post flood help'				=>	'Numero di secondi che un utente di questo gruppo deve attendere tra la pubblicazione di ogni post. Impostare 0 per disabilitare.',
'Search flood label'			=>	'Intervallo tra le ricerche',
'Search flood help'				=>	'Numero di secondi che un utente di questo gruppo deve attendere tra ogni ricerca. Impostare 0 per disabilitare.',
'E-mail flood label'			=>	'Intervallo tra le email',
'E-mail flood help'				=>	'Secondi che un utente di questo gruppo deve attendere tra ciascuna email inviata. Impostare 0 per disabilitare.',
'Report flood label'            =>  'Intervallo tra le segnalazioni',
'Report flood help'             =>  'Secondi che un utente di questo gruppo deve attendere tra ciascuna segnalazione inviata. Impostare 0 per disabilitare.',
'Moderator info'				=>	'Per assegnare i privilegi da moderatore a un utente di questo gruppo, deve essere assegnato alla moderazione di uno o pi&ugrave; forum tramite la pagina di amministrazione nel suo profilo.',

);
