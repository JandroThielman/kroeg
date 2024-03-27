<?php

    function KroegDataBase(){
        include 'connect.php';

        $sql = "SELECT * FROM kroeg;";
        $command = $connect->prepare($sql);
        $command->execute();
        $result = $command->fetchAll(PDO::FETCH_ASSOC);

        echo "<br>";

        echo "<a href='insert.php'>Insert</a>";

        echo "<br><br>";

        echo "<table border='5px'>";

            echo "  <tr>
                        <th>Kroegcode</th>
                        <th>Naam</th>
                        <th>Adres</th>
                        <th>Plaats</th>
                        <th>Wijzig</th>
                        <th>Verwijderen</th>
                    </tr>";

            foreach ($result as $data) {
                echo "<tr>";
                    echo "<td>" . $data['kroegcode'] . "</td>";
                    echo "<td>" . $data['naam'] . "</td>";
                    echo "<td>" . $data['adres'] . "</td>";
                    echo "<td>" . $data['plaats'] . "</td>";
                    echo '<td><a href="edit.php?id=' . $data['kroegcode'] . '">' . "Wijzig</a></td>";
                    echo '<td><a href="delete.php?id=' . $data['kroegcode'] . '">' . "Verwijder</a></td>";
                echo "</tr>";
            }

        echo "</table>";
    }

?>