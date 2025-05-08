@extends('layouts.master')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ms-md-2 ms-lg-5 display-6 fw-bold text-center">About the project</div>
                </div>
                <div class="col-md-12 my-3">
                    <div>
                        This is a sample project named <span style="font-weight: bold">ToDo project</span>. In this
                        project, there are some tasks and different categories. Each category has multiple tasks and
                        each task can have one category.&nbsp;
                        We have CRUD operations in this project. In other words, we can create, read, update, and delete
                        tasks and categories.
                        In addition to title and content, we can add image to each task. In this project, the validation
                        of values while creating or editing is also done.&nbsp;
                        When deleting a category, all the related tasks are also removed. Pagination has also been done.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-md-4 d-flex justify-content-center">
                    <img class="rounded-3"
                         src="{{asset('images/profile.jfif')}}">
                </div>
                <div class="col-md-8 my-3">
                    <h2 class="display-6 fw-bold">About Me</h2>
                    <p class="lead">Hi! I'm Saeed Doozandeh, a passionate web developer with a strong interest in building clean,
                        efficient, and user-friendly applications. I specialize in PHP and Laravel, and I'm constantly
                        learning new technologies to expand my skill set. I enjoy working on both the backend and
                        frontend of web projects, and I'm committed to writing maintainable, scalable code. This Todo
                        project is one of many sample applications I’ve developed to practice and demonstrate my skills
                        in Laravel, and I'm excited to keep growing as a developer through hands-on experience and
                        continuous learning.</p>
                    <p>Contact: <a href="mailto:saeed.doozandehce91@gmail.com">saeed.doozandehce91@gmail.com</a> | <a href="https://www.linkedin.com/in/saeeddoozandeh/" target="_blank">LinkedIn</a> | <a href="https://github.com/saeedking2020" target="_blank">GitHub</a> | <a href="https://drive.google.com/file/d/1tQtEb1Hj5s7a4cdMPL761XShu5F75po8/view?usp=drive_link" download>Resume</a></p></p>
                </div>
            </div>
        </div>
    </section>
@endsection
