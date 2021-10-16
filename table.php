<!DOCTYPE html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
    #horizontal {
        background-color: #e2a7f9;
    }
    #numero {
        background-color: #e2a7f9;
    }
    tr:nth-child(even) {
        background-color: #fbff9b;
    }
    tr:nth-child(odd) {
        background-color: #fcd05f;
    }
 
</style>

<body>
    <h2>Tabla</h2>
    <table>
        <tr>
            <td style="background-color: #5f67fc;"></td>
       
    <?PHP
    $start = 50;
    for ($a = $start ; $a <= 60; $a++) {
        print("<td id=horizontal>$a</td>\n");
    }
        print("</tr>\n");
        for ($i = 1 ; $i <= 10; $i++) {
            print("\n");
            print("<tr>\n");
            print("<td id=numero>$i</td>\n");
            for ($j = $start; $j <= 60; $j++) {
                if ( $j%$i == 0 ) {
                    print("<td>*</td>\n");
            }     
            else {
                print("<td>-</td>\n");
            }
            }
            print("</tr>");
       
        }
    ?>   
</table>  
</body>

</html>
