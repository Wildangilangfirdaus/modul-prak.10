<html>
<title>Tugas String dan Tanggal</title>
    <body><br>
        <form>
            Masukan Nama, Email, dan Password <br>
            Default Nama = belajar, Email = test@gmail.com dan Password = Madiun
        <br>
        Isian data :<br>
        Nama :<INPUT TYPE=TEXT NAME=password><br>
        Email :<INPUT TYPE=TEXT NAME=email><br>
        Password :<INPUT TYPE=PASSWORD NAME=pasword><br>
        <INPUT TYPE=SUBMIT VALUE="Cek"><br>
        </form>

    <?php
        if (isset($email))
            if (empty($email))
                print("Harap mengisi email <br>\n");
            else
            {
                //if (preg_match("^.+@.+\\..+$", $email))
                if (preg_match("test@gmail.com", $email))
                    print("Alamat email $email valid<br>\n");
                else
                    print("Alamat email $email tidak valid<br>\n");
            }
        if (isset($password))
        {
            $nama = "belajar";
            $pass_valid = crypt("madiun", $nama);
            $enkripsi = crypt($password, $nama);

            if ($pass_valid == $enkripsi)
            print("Password salah");
        }
        ?>
    </body>
</html>