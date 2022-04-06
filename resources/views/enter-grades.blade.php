<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Enter Grades</title>
</head>
<body>

<div class="container-sm">
    <h1>Student Grades</h2>
    <form action="compute-grades" method="POST">
        <input type="hidden" name="student_1" value="{{ $student_1 }}">
        <input type="hidden" name="student_2" value="{{ $student_2 }}">
        <input type="hidden" name="student_3" value="{{ $student_3 }}">
        <input type="hidden" name="student_4" value="{{ $student_4 }}">
        <input type="hidden" name="student_5" value="{{ $student_5 }}">
        @csrf 
        <div class="row">
            <label>Student: <b>{{$student_1 }}</b></label>
            <div class="col col-md-6">
                <label>Midterm Grade</label>
                <input type="number" name="s1_midterm" class="form-control">
            </div>
            <div class="col col-md-6">
                <label>Final Grade</label>
                <input type="number" name="s1_finals" class="form-control">
            </div>
        </div>
        <div class="row">
            <label>Student: <b>{{$student_2 }}</b></label>
            <div class="col col-md-6">
                <label>Midterm Grade</label>
                <input type="number" name="s2_midterm" class="form-control">
            </div>
            <div class="col col-md-6">
                <label>Final Grade</label>
                <input type="number" name="s2_finals" class="form-control">
            </div>
        </div>
        <div class="row">
            <label>Student: <b>{{$student_3 }}</b></label>
            <div class="col col-md-6">
                <label>Midterm Grade</label>
                <input type="number" name="s3_midterm" class="form-control">
            </div>
            <div class="col col-md-6">
                <label>Final Grade</label>
                <input type="number" name="s3_finals" class="form-control">
            </div>
        </div>
        <div class="row">
            <label>Student: <b>{{$student_4 }}</b></label>
            <div class="col col-md-6">
                <label>Midterm Grade</label>
                <input type="number" name="s4_midterm" class="form-control">
            </div>
            <div class="col col-md-6">
                <label>Final Grade</label>
                <input type="number" name="s4_finals" class="form-control">
            </div>
        </div>
        <div class="row">
            <label>Student: <b>{{$student_5 }}</b></label>
            <div class="col col-md-6">
                <label>Midterm Grade</label>
                <input type="number" name="s5_midterm" class="form-control">
            </div>
            <div class="col col-md-6">
                <label>Final Grade</label>
                <input type="number" name="s5_finals" class="form-control">
            </div>
        </div>
        <hr>
        <div class="row">
            <button class="btn btn-primary btn-lg" type="submit">
                Compute Average Grade
            </button>
        </div>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>