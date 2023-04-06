// Execute script once DOM is ready
document.addEventListener("DOMContentLoaded", function() {
    // Member List Dropdown Form
    var memberListForm = document.getElementById("member-list-form");
    if (memberListForm) {
       memberListForm.addEventListener("submit", function(event) {
          event.preventDefault(); // prevent form from submitting
          var selectedSchool = memberListForm.querySelector(".school-select").value;
          window.location.href = "/member-list?school=" + selectedSchool;
       });
    }
 
    // Add Member Form
    var addMemberForm = document.getElementById("add-member-form");
    if (addMemberForm) {
       addMemberForm.addEventListener("submit", function(event) {
          event.preventDefault(); // prevent form from submitting
          var formFields = new FormData(addMemberForm);
          fetch('/add-member', {
             method: 'POST',
             body: formFields
          })
          .then(response => {
             if (!response.ok) {
                throw new Error('Network response was not ok');
             }
             return response.json();
          })
          .then(data => {
             alert("Member added successfully.");
             addMemberForm.reset();
          })
          .catch(error => {
             console.error('There was an error sending the request:', error);
             alert("There was an error submitting the form. Please try again.");
          });
       });
    }
 });