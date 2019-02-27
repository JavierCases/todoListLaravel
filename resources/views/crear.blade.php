<h1>Ingresa Datos:</h1>
<br>
<form action="store" method="POST">
                    {!!csrf_field()!!}
                    <span>Titulo</span>
                    <input type="text" name="title">
                    <br>
                    <span>Descripcion</span>
                    <input type="textarea" name="description">
                    <br>
                    <span>Fecha</span>
                    <input type="date" name="date">
                    <br>
                    <input type="submit" name="button">
</form>