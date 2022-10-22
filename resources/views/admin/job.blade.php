



<link rel="stylesheet" href="{{ mix('css/app.css') }}">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 text-center">
    <h2>Job Info</h2>
    <form action="posted-jobs-data" method="post">
        @csrf
        <input  type="text" placeholder="Folder" name="folder_name"> <br>
        <input  type="number" placeholder="Job id" name="job_id"><br>
        <input  type="text" placeholder="Job Type" name="job_type"><br>
        <textarea type="text" placeholder="Instraction.." name="instruction"></textarea><br>
        <input  type="number" placeholder="Total Image" name="total_image"> <br>
        <input  type="number" placeholder="Amount of taka.." name="amount"> <br>

        <input  type="url" placeholder="Google drive link" name="goole_drive_link"><br>
        <!-- <label for="start-date">start-date</label><br>
        <input  type="date" id="start-date" placeholder="Start Date" name="start_Date"><br> -->
        <label for="deadline_date">Deadline_date</label><br>
        <input  type="date" id='deadline_date' placeholder="Deadline of day" name="deadline_date"><br>
        <label for="deadline_time">Deadline_time</label><br>
        <input  type="time" id='deadline_time' placeholder="Deadline of time" name="deadline_time"><br>
        <label for="empoyee_name">Assign to..</label><br>
        <select name="empoyee_name" id="empoyee_name">
            <option value="volvo">Emplyee Name</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select><br>
        <button style="border: 1px solid black; padding: 2px 6px; " type="submit">Submit</button>
    </div>
</x-app-layout>