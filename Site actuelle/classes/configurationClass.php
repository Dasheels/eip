<?php

class weatherLocation{

    private $json;

    function __construct(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'localhost:4567/weatherLocation',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        $this->json= json_decode(curl_exec($curl), true);
    }

    public function displayWeatherLocation()
    {
        $sub_nbr = 0;
        foreach ($this->json as $weatherLocation) {
                $sub_nbr = $sub_nbr + 1;
                echo "<div class='panel panel-default panel-faq'>
                    <div class='panel-heading'>
                        <a data-toggle='collapse' data-parent='#accordion' href='#faq-sub-" . $sub_nbr ."'>
                            <h4 class='panel-title'>Meteo
                        <span class='pull-right'>
                            <i class='glyphicon glyphicon-plus'></i>
                        </span>
                    </h4>
                </a>
            </div>
            <div id='faq-sub-" . $sub_nbr ."' class='panel-collapse collapse'>
                <div class='panel-body'>";
                    echo "<li>Ville : " . $weatherLocation["cityname"] . ".</li>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        }
    }
}