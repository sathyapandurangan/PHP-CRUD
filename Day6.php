<!DOCTYPE html>
<html>
<head>
    <title>Product CRUD</title>
    <style>
        
        body { background: #862a9b;
background: linear-gradient(90deg,rgba(134, 42, 155, 0.97) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%);  ; font-family: Arial; margin: 20px; margintop: 30px; }
        form { margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;max-width: 500px; background: #833AB4; padding: 20px;  margin-bottom: 30px; }
        input{
            width: 100%; padding: 10px; box-sizing: border-box; border-radius: 4px; border: 1px solid #ccc; margin-top: 5px;
        }
        h2{
            text-align: center; color: black; font-size: 24px; margin-bottom: 20px;
        }
        button{
            margin-top: 15px; padding: 10px; width: 30%; border-radius: 4px; border: none; color: white; font-size: 16px; cursor: pointer; background:#57C785; 
        }
    </style>
    
</head>
<body>

<h2>Add New Product</h2>
<form method="POST" action="">
    <input type="text" name="name" placeholder="Product Name" required><br><br>
    <textarea name="description" placeholder="Description" required></textarea><br><br>
    <input type="number" step="0.01" name="price" placeholder="Price" required><br><br>
    <select name="category" required>
        <option value="">Select Category</option>
        <option value="electronics">Electronics</option>
        <option value="clothing">Clothing</option>
        <option value="books">Books</option>
        <option value="home">Home & Kitchen</option>
        <option value="toys">Toys</option>
    </select><br><br>
    <input type="number" name="stock" placeholder="Stock Quantity" required><br><br>
    <input type="Ratings" name="Ratings" placeholder="Ratings and Reviews" required><br><br>
    <input type="Brand" name="Brand" placeholder="Brand" required><br><br>
    <button type="submit" name="add_product">Add to cart</button>
    <button type="submit" name="Buy now">Buy now</button>
</form>


</body>
</html>
