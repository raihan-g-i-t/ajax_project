<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ajax Test</title>
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
  </head>
  <body>
    <h1>CRUD project with Ajax</h1>

<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add Product</a>

<table>
    <tr>
        <th>ID</td>
        <th>|</td>
        <th>Name</td>
        <th>|</td>
        <th>Price</td>
        <th>|</td>
        <th>Action</th>
        <th>|</td>
    </tr>
    <tr>
        <td>1</td>
        <th>|</td>
        <td>Raihan</td>
        <th>|</td>
        <td>()</td>
        <th>|</td>
        <td>
            <a href="#"> <i class="las la-edit"></i> </a>
            <a href="#"><i class="las la-trash-alt"></i> </a> </td>
        <th>|</td>
    </tr>

</table>

@include('add_product')
@include('product_js')

  </body>
</html>