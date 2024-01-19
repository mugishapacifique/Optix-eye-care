
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Optix eye care</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom, #87CEEB, #3498db); /* Ocean blue background */
      color: #333;
    }

    header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 1em;
    }

    main {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input, select, textarea, button {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    #successMessage {
      color: #4caf50;
      text-align: center;
      font-weight: bold;
      margin-bottom: 15px;
    }

    #nextAppointmentBtn {
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    #nextAppointmentBtn:hover {
      background-color: #2980b9;
    }

    #scheduledAppointments {
      margin-top: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #f9f9f9;
    }

    #scheduledAppointments h2 {
      margin-bottom: 10px;
    }

    #scheduledAppointments ul {
      list-style-type: none;
      padding: 0;
    }

    #scheduledAppointments li {
      margin-bottom: 5px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Optix eye care</h1>
  </header>

  <main>
    <form id="appointmentForm">
      <label for="patientName">Patient Name:</label>
      <input type="text" id="patientName" name="patientName" required>

      <label for="patientAge">Patient Age:</label>
      <input type="number" id="patientAge" name="patientAge" required>

      <label for="patientSex">Patient Sex:</label>
      <select id="patientSex" name="patientSex" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <label for="appointmentDate">Appointment Date:</label>
      <input type="date" id="appointmentDate" name="appointmentDate" required>

      <label for="appointmentTime">Appointment Time:</label>
      <input type="time" id="appointmentTime" name="appointmentTime" required>

      <label for="medicalHistory">Medical History:</label>
      <textarea id="medicalHistory" name="medicalHistory" rows="4"></textarea>

      <label for="treatmentType">Treatment on eye:</label>
      <select id="treatmentType" name="treatmentType" required>
        <option value="Cosmetic Dentistry">Ophthalmologist</option>
        <option value="Core Restorations">Optometrist</option>
        <option value="Dental Implant Prosthesis">Optician</option>
        <option value="Teeth Whitening">Orthoptis</option>
        <option value="Root Canal Therapies">Ocularist</option>
        <option value="BPS/Soft/Valplast Dentures">Retina Specialist</option>
        <option value="Gum Surgeries">Cornea Specialis</option>
        <option value="Orthognathic Surgeries">Pediatric Ophthalmologist</option>
        <option value="Oral Surgery">Neuro-Ophthalmologist</option>
        <option value="Periodontal Surgeries">Low Vision Specialist</option>
        <option value="Orthodontics and Paediatrics Dentist">Optical Coherence Tomography (OCT)</option>
        <option value="Jaw Corrections and Alignments">LASIK Surgeon</option>
    
      </select>

      <button type="button" onclick="scheduleAppointment()">Schedule Appointment</button>

      <div id="successMessage"></div>

      <button type="button" id="nextAppointmentBtn" onclick="scheduleNextAppointment()">Next Appointment</button>
    </form>

    <div id="scheduledAppointments">
      <h2>Scheduled Appointments</h2>
      <ul id="appointmentsList"></ul>
    </div>
  </main>

  <script>
    function scheduleAppointment() {
      var patientName = document.getElementById('patientName').value;
      var patientAge = document.getElementById('patientAge').value;
      var patientSex = document.getElementById('patientSex').value;
      var appointmentDate = document.getElementById('appointmentDate').value;
      var appointmentTime = document.getElementById('appointmentTime').value;
      var medicalHistory = document.getElementById('medicalHistory').value;
      var treatmentType = document.getElementById('treatmentType').value;

      // Display the scheduled appointment
      var appointmentDetails = `${patientName} | Age: ${patientAge} | Sex: ${patientSex} | Date: ${appointmentDate} | Time: ${appointmentTime} | Treatment: ${treatmentType}`;
      var appointmentsList = document.getElementById('appointmentsList');
      var listItem = document.createElement('li');
      listItem.textContent = appointmentDetails;
      appointmentsList.appendChild(listItem);

      // Display success message
      document.getElementById('successMessage').innerText = 'Appointment scheduled successfully!';
      document.getElementById('appointmentForm').reset();
    }

    function scheduleNextAppointment() {
      // Add logic for scheduling the next appointment
      alert('Functionality for scheduling next appointment is not implemented in this example.');
    }
  </script>

</body>
</html>
