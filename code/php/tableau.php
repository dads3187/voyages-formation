<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>

    <style>
        table{width: 100%;}
        td{background-color: aqua;}
        th{background-color: rgb(255, 157, 127);}

    </style>



</head>
<body>
    
    <table>


        <!--Un tableau est constituer de ligne et de colonnes
        1 ligne contiens des colonnes 
        les lignes sont divisés en colonnes = <tr></tr>
        LES COLONNES= CELLULES qui contiennent des données = <td></td>
        td= table data
        th=table heading TITRE
    
        <th rowspan= 3 il prendra 3 ligne
        <th colspan= 3 il prendra 3 colonne
    
    
    -->
            <tr>
                <th rowspan="2">titre 1</th>
            
                <th colspan="5">Coordonnées</th>
            </tr>   
            <tr>
                <td colspan="5">adresse</td>
            </tr>
            <tr>
                <th rowspan="2">titre 1</th>
            
                <th colspan="5">Coordonnées</th>
            </tr>   
            <tr>
                <td colspan="5">adresse</td>
            </tr>
            <tr>
                <td>un</td>
                <td>deux</td>
                <td>trois</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, fugit ea nostrum explicabo quidem illo nam rem. Modi atque eos voluptas, minus sit maxime, cum earum nemo porro ullam hic.</td>
            </tr>

            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td><img src="img/gallery-1.jpg" alt="" width="25%"></td>
            </tr>





    </table>
        
    <form action="">
        <fieldset>
            <input type="text" placeholder="nom prenom">
            <input type="email" placeholder="email">
            
        </fieldset>

        <fieldset>
            <input type="text" placeholder="nom prenom">
            <input type="email" placeholder="email">
        </fieldset>
    </form>

</body>
</html>