<html>
    <head>
        <title>Aplikasi Kalkulator</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="col-lg-6">
                <div class="card shadow mt-8">
                    <b><h1>CALCULATORS</h1></b>
                    <form NAME="sci-calc">
                        <TABLE CELLSPACING="0" CELLPADDING="1">
                            <tr>
                                <td COLSPAN="7" ALIGN="center">
                                    <input class="colom-input shadow mb-2" NAME="display" VALUE="0" SIZE="28" MAXLENGTH="25">
                                </td>
                            </tr>
                            <tr>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" exp " ONCLICK="if (checkNum(this.form.display.value)) { exp(this.form) }">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" 7 " ONCLICK="addChar(this.form.display, '7')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" 8 " ONCLICK="addChar(this.form.display, '8')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" 9 " ONCLICK="addChar(this.form.display, '9')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" / " ONCLICK="addChar(this.form.display, '/')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" . " ONCLICK="addChar(this.form.display, '.')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" +/- " ONCLICK="changeSign(this.form.display)">
                                </td>
                            </tr>
                            <tr>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" ln " ONCLICK="if (checkNum(this.form.display.value)) { ln(this.form) }">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" 4 " ONCLICK="addChar(this.form.display, '4')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" 5 " ONCLICK="addChar(this.form.display, '5')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" 6 " ONCLICK="addChar(this.form.display, '6')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" * " ONCLICK="addChar(this.form.display, '*')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" sq " ONCLICK="if (checkNum(this.form.display.value)) { square(this.form) }">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" 0 " ONCLICK="addChar(this.form.display, '0')">
                                </td>
                            </tr>
                            <!-- Baris ke-3 -->
                            <tr>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" sqrt " ONCLICK="if (checkNum(this.form.display.value)) { sqrt(this.form) }">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" 1 " ONCLICK="addChar(this.form.display, '1')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" 2 " ONCLICK="addChar(this.form.display, '2')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" 3 " ONCLICK="addChar(this.form.display, '3')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" - " ONCLICK="addChar(this.form.display, '-')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE="=" NAME="enter" ONCLICK="if (checkNum(this.form.display.value)) { compute(this.form) }">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light shadow tombol" VALUE=" + " ONCLICK="addChar(this.form.display, '+')">
                                </td>
                            </tr>
                            <!-- Baris ke-4 -->
                            <tr>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light tombol" VALUE=" ( " ONCLICK="addChar(this.form.display, '(')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light tombol" VALUE="cos" ONCLICK="if (checkNum(this.form.display.value)) { cos(this.form) }">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light tombol" VALUE=" sin" ONCLICK="if (checkNum(this.form.display.value)) { sin(this.form) }">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light tombol" VALUE=" tan" ONCLICK="if (checkNum(this.form.display.value)) { tan(this.form) }">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light tombol" VALUE=" ) " ONCLICK="addChar(this.form.display, ')')">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light tombol" VALUE="clear" ONCLICK="this.form.display.value = 0 ">
                                </td>
                                <td ALIGN="center">
                                    <input TYPE="button" class="btn btn-light tombol" VALUE="C" ONCLICK="deleteChar(this.form.display)">
                                </td>
                            </tr>
                        </TABLE>
                    </form>
                </div>
            </div>
        </div>
        <!-- Link Javascript -->
        <script src="kalkulator.js"></script>
        <!-- Bootstrap Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>