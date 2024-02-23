function validateForm() {
    var sku = document.getElementById('sku').value;
    var name = document.getElementById('name').value;
    var price = document.getElementById('price').value;

    // Add more fields as needed for validation

    if (sku.trim() === '' || name.trim() === '' || price.trim() === '') {
        alert('Please fill in all required fields (SKU, Name, Price).');
        event.preventDefault(); // Prevent form submission if validation fails
    }
    // You can add more complex validation logic based on your requirements.
}