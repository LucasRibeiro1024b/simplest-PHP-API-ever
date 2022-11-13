# The Simplest API ever in PHP

How-to run
```console
$ php -S localhost:8080
```

Base url
```
http://localhost/index.php/{path}/{action}
```

<table>
    <tr>
        <th>METHOD</th>
        <th>PATH</th>
        <th>DESCRIPTION</th>
        <th>JSON BODY</th>
    </tr>
    <tr>
        <td><img src="https://img.shields.io/badge/-GET-blue"></td>
        <td><strong>/cats/list</strong></td>
        <td>Returns all cat breeds.</td>
    </tr>
    <tr>
        <td><img src="https://img.shields.io/badge/-POST-green"></td>
        <td><strong>/cats/add</strong></td>
        <td>Sends a new breed</td>
        <td>{ catBreed: "breed" }</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>