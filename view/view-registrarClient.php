<form action="" method="post">
        <table>
        <tr>
            <td colspan="2">
                <label for="dni">DNI</label>    
                <input type="text" name="dni" id="dni" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" required>
            </td>
            <td>
                <label for="surname">Cognoms</label>
                <input type="text" name="surname" id="surname" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="address">Direcció</label>
                <input type="text" name="address" id="address" required>
            </td>
            <td>
                <label for="b_date">Data de naixement</label>
                <input type="date" name="b_date" id="b_date" required>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Enviar">
            </td>
        </tr>
        </table>
</form>