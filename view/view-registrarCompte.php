<form action="" method="post">
        <table>
        <tr>
            <td colspan="2">
                <label for="numero_compte">Numero Compte</label>    
                <input type="text" name="numero_compte" id="numero_compte" required>
            </td>
            <td>
                <label for="money">Saldo</label>
                <input type="number" min="0" max="199999" name="money" id="money" required>
            </td>
            <td>
            <?php
                echo $codi_html;
            ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Enviar">
            </td>
        </tr>
        </table>
</form>