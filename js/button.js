document.addEventListener('DOMContentLoaded', function () {
    const table = document.getElementById('data-table');
  
    // Event delegation to handle edit and delete buttons
    table.addEventListener('click', function (e) {
      if (e.target.classList.contains('edit-btn')) {
        editRow(e.target);
      } else if (e.target.classList.contains('delete-btn')) {
        deleteRow(e.target);
      }
    });
  
    // Function to handle edit button click
    function editRow(button) {
      const row = button.closest('tr');
      const nameCell = row.cells[0];
      const ageCell = row.cells[1];
  
      const newName = prompt('Enter new name:', nameCell.textContent);
      const newAge = prompt('Enter new age:', ageCell.textContent);
  
      if (newName !== null) nameCell.textContent = newName;
      if (newAge !== null) ageCell.textContent = newAge;
    }
  
    // Function to handle delete button click
    function deleteRow(button) {
      if (confirm('Are you sure you want to delete this row?')) {
        const row = button.closest('tr');
        row.remove();
      }
    }
  });
  