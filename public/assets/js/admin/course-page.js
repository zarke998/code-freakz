var per_page = 8;
var offset = 0;
var courses_count = 0;

$(document).ready(function (){
    loadCourses();

    $(".course-page-btn").click(nextPrevCoursesBtn);
});

function nextPrevCoursesBtn(){
    let btn = this;
    let inc = btn.dataset.inc;

    let incNum = parseInt(inc);
    if(incNum == -1 && offset <= 0)
        return;

    offset = offset + (per_page * incNum);

    if(offset > courses_count){
        offset = offset - (per_page * incNum);
        return;
    }

    console.log(offset);

    loadCourses();
}
function loadCourses(){
    $.ajax({
        url: "/courses/pagination",
        method: "GET",
        dataType: "json",
        data: {
            per_page: per_page,
            offset: offset
        },
        success: function (data) {
            courses_count = data.courses_count;
            displayCourses(data.courses);
        },
        error: function(xhr, textStatus, error){
            alert("Error loading courses.");
        }
    });
}

function displayCourses(courses) {
    let coursesContainer = $("#courses-container");

    let coursesHtml = ``;

    courses.forEach(function (course) {
        coursesHtml = `<tr>
                        <th scope="row">${ course.id }</th>
                        <td>${ course.name }</td>
                        <td>${ course.author.first_name + " " + course.author.last_name}</td>
                        <td class="table-actions d-flex justify-content-center">
                            <a href="/courses/edit/${ course.id }" class="cf-link"><i class="lni lni-pencil"></i></a>
                            <a href="/courses/remove/${ course.id}" class="cf-link ml-3"><i class="lni lni-trash"></i></a>
                        </td>
                    </tr>`;
    });

    $(coursesContainer).html(coursesHtml);
}
