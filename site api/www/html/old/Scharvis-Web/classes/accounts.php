<?php

class Accounts{

    private $json;

    function __construct(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'localhost:4567/accounts',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        $this->json= json_decode(curl_exec($curl), true);
    }

    public function displayAccounts(){
        echo"<table>";
        echo "<tr><th>Name</th><th>Phone Number</th><th>Birthdate</th><th>Admin</th></tr>";
        foreach ($this->json as $account) {
            echo "<tr>
                    <td>" . $account["name"] . "</td>
                    <td>" . $account["phonenumber"] . "</td>
                    <td>" . $account["birthdate"] . "</td>
                    <td>" . $account["admin"] . "</td>";
            if ($_SESSION["isAdmin"]) {
                echo "<td><a href='scripts/deleteUser.php?phonenumber=" . $account["phonenumber"] . "'>X</a></td>";
            }
            echo"</tr>";
        }
        echo"</table>";
    }
}
