<?php
// Initialisation de la variable de message.
$message = '';

// Traitement du formulaire.
if (isset($_POST['ok'])) {
    // Récupérer les informations sur le fchier.
    $informations = $_FILES["fichier"];
   
    // En extraire :
    // - son nom.
    $nom = $informations['name'];
    // - son type MIME.
    $type_mime = $informations['type'];
    // - sa taille.
    $taille = $informations['size'];
    // - l'emplacement du fchier temporaire.
    $fchier_temporaire = $informations['tmp_name'];
    // - le code d'erreur.
    $code_erreur = $informations['error'];
    // Contrôles et traitement.
    switch ($code_erreur) {
        case UPLOAD_ERR_OK:

            // Fichier bien reçu.
            // Déterminer sa destination fnale à vous de coder le chemin ceci est un exemple.
            $destination = "../test/$nom";
            // Copier le fchier temporaire (tester le résultat).
            if (copy($fchier_temporaire, $destination)) {
                // Copie OK => mettre un message de confrmation.
                $message = "Transfert terminé - Fichier = $nom - ";
                $message .= "Taille = $taille octets - ";
                $message .= "Type MIME = $type_mime.";
            } else {
                // Problème de copie => mettre un message d'erreur.
                $message = 'Problème de copie sur le serveur.';
            }
            break;
        case UPLOAD_ERR_NO_FILE:
            // Pas de fchier saisi.
            $message = 'Pas de fichier saisi.';
            break;
        case UPLOAD_ERR_INI_SIZE:
            // Taille fchier > upload_max_filesize.
            $message = "Fichier '$nom' non transféré ";
            $message .= ' (taille > upload_max_filesize).';
            break;
        case UPLOAD_ERR_FORM_SIZE:
            // Taille fchier > MAX_FILE_SIZE.
            $message = "Fichier '$nom' non transféré ";
            $message .= ' (taille > MAX_FILE_SIZE).';
            break;
        case UPLOAD_ERR_PARTIAL:
            // Fichier partiellement transféré.
            $message = "Fichier '$nom' non transféré ";
            $message .= ' (problème lors du tranfert).';
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            // Pas de répertoire temporaire.
            $message = "Fichier '$nom' non transféré ";
            $message .= ' (pas de répertoire temporaire).';
            break;
        case UPLOAD_ERR_CANT_WRITE:
            // Erreur lors de l'écriture du fchier sur disque.
            $message = "Fichier '$nom' non transféré ";
            $message .= ' (erreur lors de l\'écriture du fchier sur disque).';
            break;
        case UPLOAD_ERR_EXTENSION:
            // Transfert stoppé par l'extension.
            $message = "Fichier '$nom' non transféré ";
            $message .= ' (transfert stoppé par l\'extension).';
            break;
        default:
            // Erreur non prévue !
            $message = "Fichier non transféré ";
            $message .= " (erreur inconnue : $code_erreur ).";
    }
    function vers_page($message)
    {        //pensez a recoder cette partie pour que cela corresponde à votre fichier de destination
        header('Location: ./upload.php?message=' . $message);
    }
    if (isset($message)) {
        vers_page($message);
    }
}

?>
<body>
    

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fichier">
    <input type="submit" name="ok" value="OK">
</form>

</body>