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
        /* echo"<table>";
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
        echo"</table>"; */

        $sub_nbr = 0;
        foreach ($this->json as $account) {
                $sub_nbr = $sub_nbr + 1;
                echo "<div class='panel panel-default panel-faq'>
                    <div class='panel-heading'>
                        <a data-toggle='collapse' data-parent='#accordion' href='#faq-sub-" . $sub_nbr ."'>
                            <h4 class='panel-title'>
                                " . $account["name"] . "
                                <span class='pull-right'>
                                    <i class='glyphicon glyphicon-plus'></i>
                                </span>
                            </h4>
                        </a>
                    </div>
                    <div id='faq-sub-" . $sub_nbr ."' class='panel-collapse collapse'>
                        <div class='panel-body'>";
                                echo "<ul>";
                                    echo "<li>Nom : " . $account["name"] . ".</li>";
                                    echo "<li>Numéro de téléphone : " . $account["phonenumber"] . ".</li>";
                                    echo "<li>Date de naissance : " . $account["birthdate"] . ".</li>";
                                    echo "<li>Administrateur : " . $account["admin"] . ".</li>";
                                echo "</ul>";
                                if ($_SESSION["isAdmin"])
                                echo "<a class='btn btn-primary btn-sm' href='./utilisateur.php'>Modifier ce compte</a>";
                                echo "<a class='btn btn-primary btn-sm' href='scripts/deleteUser.php?phonenumber=" . $account["phonenumber"] . "'>Supprimer ce compte</a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }

    }
}
