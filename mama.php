<!DOCTYPE html>
<html>
<head>
  <title>College and Department Selection</title>
</head>
<body>
  <h1>College and Department Selection</h1>

  <label for="collegeSelect">Select a College:</label>
  <select id="collegeSelect" onchange="updateDepartmentList()">
    <option value="">Select</option>
    <option value="college1">College 1</option>
    <option value="college2">College 2</option>
    <option value="college3">College 3</option>
    <!-- Add more colleges as needed -->
  </select>

  <label for="departmentSelect">Select a Department:</label>
  <select id="departmentSelect">
    <option value="">Select</option>
  </select>

  <h2>Available Courses:</h2>
  <ul id="courseList">
    <!-- Course options will be added here dynamically -->
  </ul>

  <script>
    const departmentsByCollege = {
      college1: ["Department A", "Department B", "Department C"],
      college2: ["Department X", "Department Y", "Department Z"],
      college3: ["Department P", "Department Q", "Department R"],
      // Add more department lists for each college
    };

    const coursesByDepartment = {
      "Department A": ["Course 1A", "Course 2A", "Course 3A"],
      "Department B": ["Course 1B", "Course 2B", "Course 3B"],
      // Add more course lists for each department
    };

    const collegeSelect = document.getElementById("collegeSelect");
    const departmentSelect = document.getElementById("departmentSelect");
    const courseList = document.getElementById("courseList");

    function updateDepartmentList() {
      const selectedCollege = collegeSelect.value;
      departmentSelect.innerHTML = "<option value=''>Select</option>";
      courseList.innerHTML = "";

      if (selectedCollege) {
        const departments = departmentsByCollege[selectedCollege];
        for (const department of departments) {
          const option = document.createElement("option");
          option.value = department;
          option.textContent = department;
          departmentSelect.appendChild(option);
        }
      }
    }

    departmentSelect.addEventListener("change", updateCourseList);

    function updateCourseList() {
      const selectedDepartment = departmentSelect.value;
      courseList.innerHTML = "";

      if (selectedDepartment) {
        const courses = coursesByDepartment[selectedDepartment];
        for (const course of courses) {
          const listItem = document.createElement("li");
          listItem.textContent = course;
          courseList.appendChild(listItem);
        }
      }
    }
  </script>
</body>
</html>