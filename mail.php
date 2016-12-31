<?PHP
   $adresat = 'kris1@kdk.com.pl';    // pod ten adres zostanie wysłana wiadomosc
   @$email = $_POST['email'];
   @$content = $_POST['comments'];
   $header = "From: strategie giełdowe \nContent-Type:".
         'text/plain;charset=utf-8'.
         "\nContent-Transfer-Encoding: 8bit";
   if (mail($adresat, 'List ze strony od ' .$email, $content, $header))
      mail($email, 'Potwierdzenie wysłania wiadomości', "Dziękujemy za wiadomość. Skontaktujemy się wkrótce. \n\nZ poważaniem, strategie-gieldowe.pl", $header);
   else
      echo '<p><b>NIE</b> wysłano maila!</p>';
?>