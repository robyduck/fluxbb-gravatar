<?php

// Definizioni di lingua usate in install.php
/* Traduzione di: Oscon.it */

$lang_install = array(

'Install message'			 	=> 'Il file config.php non esiste ancora o &egrave; corrotto. FluxBB non &egrave; perci&ograve; stato ancora installato: per completare l\'installazione, seguire le istruzioni.',
'Choose install language' 		=> 'Scegliere la lingua di installazione',
'Choose install language info' 	=> 'La lingua utilizzata per installare il sistema.',
'Install language' 				=> 'Lingua di installazione',
'Change language'				=> 'Cambia lingua',
'Next' 							=> 'Avanti',
'Already installed'				=> 'FluxBB sembra gi&agrave; installato. Controlla a <a href="index.php">questo link</a>.',
'You are running error' 		=> '&Egrave; attivo %1$s versione %2$s. FluxBB %3$s necessita almeno %1$s %4$s per funzionare correttamente. Effettuare l\'aggiornamento di %1$s prima di continuare.',
'My FluxBB Forum' 				=> 'Il mio forum FluxBB',
'Description' 					=> 'Nessuno pu&ograve; descrivere cosa sia FluxBB, bisogna provarlo!',
'Username 1' 					=> 'Il nome utente deve essere composto da almeno 2 caratteri.',
'Username 2' 					=> 'Il nome utente non pu&ograve; eccedere i 25 caratteri.',
'Username 3' 					=> 'Il nome utente Ospite &egrave; riservato.',
'Username 4' 					=> 'Il nome utente non pu&ograve; essere un indirizzo IP.',
'Username 5' 					=> 'Il nome utente non pu&ograve; contenere i caratteri \', " e [ o ] insieme.',
'Username 6' 					=> 'Il nome utente non pu&ograve; contenere BBCode.',
'Short password' 				=> 'La password deve essere composta da almeno 4 caratteri.',
'Passwords not match' 			=> 'Le password non coincidono.',
'Wrong email' 					=> 'L\'email di amministrazione inserita non &egrave; valida.',
'No board title' 				=> 'Inserire un titolo generale.',
'Error default language' 		=> 'La lingua predefinita selezionata non sembra esistere.',
'Error default style'			=> 'Lo stile predefinito selezionato non sembra esisetere.',
'No DB extensions'				=> 'L\'ambiente PHP installato non supporta nessuno dei database utilizzati da FluxBB. Per installare FluxBB abilitare il supporto almeno a uno tra i seguenti formati: MySQL, PostgreSQL, SQLite.',
'Administrator username' 		=> 'Nome dell\'amministratore',
'Administrator password 1'		=> 'Password di amministrazione',
'Administrator password 2' 		=> 'Conferma password di amministrazione',
'Administrator email'		 	=> 'Email di amministrazione',
'Board title' 					=> 'Titolo',
'Base URL' 						=> 'Indirizzo base',
'Required field'			 	=> '&egrave; un campo necessario.',
'FluxBB Installation'			=> 'Installazione di FluxBB',
'Welcome'						=> 'Benvenuto nell\'installazione di FluxBB. Per installare correttamente il sistema compilare i campi richiesti. In caso di difficolt&agrave; consultare la documentazione online.',
'Install' 						=> 'Installazione di FluxBB %s',
'Errors'					 	=> 'Correggere i seguenti errori:',
'Database setup'				=> 'Impostazioni del database',
'Info 1' 						=> 'Inserire i dati richiesti per configurare il database per FluxBB e procedere con l\'installazione.',
'Select database'				=> 'Tipo di database',
'Info 2' 						=> 'FluxBB supporta MySQL, PostgreSQL e SQLite. Qualora il database desiderato non fosse presente nel successivo menu a cascata, non si dispone del supporto necessario sul server. Ulteriori informazioni sono reperibili sul sito di FluxBB.',
'Dual MySQL'					=> 'FluxBB ha rilevato il supporto PHP a due diversi protocolli di comunicazione con MySQL, chiamati <em>standard</em> e <em>improved</em>. In caso di dubbio, selezionare prima <em>improved</em> e poi - in caso di errore - <em>standard</em>.',
'InnoDB' 						=> 'FluxBB ha rilevato che il server MySQL potrebbe supportare <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>. Questa &egrave; la scelta corretta qualora si pianifichi l\'installazione di un forum di grandi dimensioni. In caso di incertezza, &egrave; raccomandato di non abilitare InnoDB.',
'Database type'					=> 'Tipo di database',
'Required'						=> '(Richiesto)',
'Database hostname' 			=> 'Nome server',
'Info 3' 						=> 'L\'indirizzo del server database (generalmente: <em>localhost</em>, ma anche db.miodominio.est o 192.168.0.15). &Egrave; possibile specificare una porta personlizzata se il database non usa la porta standard (esempio: localhost:3580). Per SQLite, lasciare vuoto o inserire <em>localhost</em>.',
'Database server hostname' 		=> 'Database server hostname',
'Database enter name' 			=> 'Nome del database',
'Info 4' 						=> 'Il nome del database nel quale installare FluxBB. Il database deve gi&agrave; esistere. Per SQLite, indicare il percorso relativo al file di archivio, se non esiste, FluxBB prover&agrave; a crearlo. Per ragioni di sicurezza, si raccomanda di inserire il database SQLite in una cartella privata del server (non accessibile via Internet).',
'Database name' 				=> 'Nome del database',
'Database enter informations' 	=> 'Nome utente e password del database',
'Database username' 			=> 'Nome utente',
'Info 5' 						=> 'Inserire il nome utente e la password per la connessione al database. Lasciare vuoto se si utilizza SQLite.',
'Database password' 			=> 'Password',
'Database enter prefix' 		=> 'Prefisso per le tabelle',
'Info 6' 						=> '&Egrave; possibile scegliere uno specifico prefisso per le tabelle nel database (esempio: <em>flux_</em>). In questo modo si agevola la visualizzazione in ordine alfabetico e si possono installare copie multiple del forum nello stesso database.',
'Table prefix' 					=> 'Prefisso tabelle',
'Administration setup' 			=> 'Impostazioni di amministrazione',
'Info 7'						=> 'Inserire i dati richiesti per impostare un amministratore di sistema.',
'Admin enter username' 			=> 'Nome utente dell\'amministratore',
'Info 8' 						=> 'Il nome utente dell\'amministratore del forum. &Egrave; possibile impostare successivamente altri amministratori e moderatori. I nomi utente devono essere composti da minimo 2 e massimo 25 caratteri',
'Admin enter password' 			=> 'Password di amministrazione',
'Info 9' 						=> 'La password deve essere composta da minimo 4 caratteri. Le password sono sensibili a maiuscole/minuscole.',
'Password' 						=> 'Password',
'Confirm password' 				=> 'Conferma password',
'Admin enter email' 			=> 'Email di amministrazione',
'Info 10'					 	=> 'L\'indirizzo email dell\'amministratore del forum.',
'Board setup' 					=> 'Impostazioni di sistema',
'Info 11' 						=> 'Inserire i dati richiesti per impostare il sistema.',
'Enter board title' 			=> 'Nome del forum',
'Info 12' 						=> 'Il nome mostrato in cima ad ogni pagina (esempio: "Forum di Oscon").',
'Enter board description' 		=> 'Descrizione generale',
'Info 13' 						=> 'Un breve occhiello di descrizione del forum mostrato in cima ad ogni pagina (esempio: "Il contratto open source"). Pu&ograve; contenere HTML.',
'Board description' 			=> 'Descrizione',
'Enter base URL' 				=> 'Indirizzo di installazione',
'Info 14' 						=> 'L\'indirizzo del forum del forum (esempio: http://forum.miosito.est o http://miosito.est/forum). Assicurarsi della correttezza di questo campo e non tralasciare le slash. In caso di errore gli amministratori e i moderatori non potranno pubblicare messaggi. Il valore predefinito &egrave; semplicemente fluxbb.',
'Choose the default language' 	=> 'Lingua predefinita',
'Info 15' 						=> 'La lingua predefinita utilizzata dagli ospiti e dagli utenti che non hanno modificato l\'impostazione nel proprio profilo.',
'Default language' 				=> 'Lingua predefinita',
'Choose the default style' 		=> 'Stile grafico predefinito',
'Info 16' 						=> 'Lo stile grafico predefinito utilizzato dagli ospiti e dagli utenti che non hanno modificato l\'impostazione nel proprio profilo.',
'Default style' 				=> 'Stile',
'Start install' 				=> 'Inizia installazione',
'DB type not valid' 			=> '\'%s\' non &egrave; un tipo di database valido',
'Table prefix error' 			=> 'Il prefisso \'%s\' contiene caratteri non permessi o &egrave; troppo lungo. I prefissi possono contenere caratteri alfanumerici (a - z, 0 - 9), il trattino basso (_), e non possono iniziare con un numero. La lunghezza massima consentita &egrave; 40 caratteri. Scegliere un prefisso differenze, grazie.',
'Prefix reserved' 				=> 'Il prefisso \'sqlite_\' &egrave; riservato al motore di SQLite. Scegliere un prefisso differenze, grazie',
'Existing table error' 			=> 'Una tabella chiamata \'%susers\' &egrave; gi&agrave; presente nel database \'%s\'. FluxBB potrebbe essere gi&agrave; installato o un altro software potrebbe utilizzare una delle tabelle richieste da FluxBB. Per installare copie multiple del forum nel medesimo database, scegliere un prefisso differente',
'InnoDB off' 					=> 'InnoDB non sembra attivo. Selezionare un database che non utilizza InnoDB o abilitarlo nel serve MySQL in uso',
'Administrators' 				=> 'Amministratori',
'Administrator' 				=> 'Amministratore',
'Moderators' 					=> 'Moderatori',
'Moderator' 					=> 'Moderatore',
'Guests'                        => 'Ospiti',
'Guest' 						=> 'Ospite',
'New member' 					=> 'Nuovo utente',
'Members' 						=> 'Utenti',
'Member' 						=> 'Utente',
'Announcement' 					=> 'Inserire un annuncio.',
'Rules' 						=> 'Inserire le proprie regole.',
'Maintenance message' 			=> 'Il forum &egrave; momentanemante in manutenzione. Riprova tra qualche minuto, grazie!',
'Test post' 					=> 'Messaggio di prova',
'Message' 						=> 'Se leggi questo messagio (come sembrerebbe tu stia facendo ;)), l\'installazione di FluxBB dovrebbe essere andata a buon fine! Ora puoi accedere al pannello di amministrazione per configurare e personalizzare al meglio tutti gli aspetti del forum!',
'Test category' 				=> 'Categoria di test',
'Test forum' 					=> 'Forum di test',
'This is just a test forum' 	=> 'Questo &egrave; un forum di test',
'Alert cache' 					=> '<strong>La cartella <em>%s</em> non &egrave; scrivibile!</strong> Affinch&eacute; FluxBB funzioni correttamente, &egrave; necessario che disponga dei permessi di scrittura per PHP. Usare il comando <em>chmod</em> per impostare i permessi appropriati. In caso di dubbio, impostare 0777.',
'Alert avatar' 					=> '<strong>La cartella <em>%s</em> non &egrave; scrivibile!</strong> Affinch&eacute; gli utenti possano caricare delle proprie immagini personali, &egrave; necessario che disponga dei permessi di scrittura per PHP. Successivamente &egrave; possibile decidere una cartella differente (si veda: Amministrazione/Opzioni). Usare il comando <em>chmod</em> per impostare i permessi appropriati. In caso di dubbio, impostare 0777',
'Alert upload'					=> '<strong>Il caricamento di documenti appare disabilitato su questo server!</strong> Affinch&eacute; gli utenti possano caricare delle proprie immagini personali, &egrave; necessario abilitare <em>file_uploads</em> in PHP. Quando l\'abilitazione sar&agrave; attiva, il caricamento di immagini potr&agrave; essere attivato in Amminsitrazione/Opzioni/Funzionalit&agrave;.',
'FluxBB has been installed' 	=> 'FluxBB &egrave stato installato!',
'Final instructions' 			=> 'Istruzioni finali',
'Info 17' 						=> 'Per <strong>completare l\'installazione</strong>, &egrave necessario scaricare dal collegamento a fondo pagina il file <em>config.php</em>. Questo file <strong>deve</strong> essere caricato nella cartella di installazione di FluxBB.',
'Info 18' 						=> 'Una volta caricato il file, FluxBB e la sua <a href="index.php">prima pagina</a> saranno pienamente funzionanti!.',
'Download config.php file' 		=> 'Scarica config.php!',
'FluxBB fully installed' 		=> 'FluxBB &egrave; stato installato! <a href="index.php">Prova subito il nuovo forum</a>!.',

);
