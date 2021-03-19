var per_page = 5;
var offset = 0;
var filtered_count;
var active_page = 1;
var filters = {};

$(document).ready(function(){
    initializeCourses();

    $("#apply-filters-btn").click(applyFilters);
});

function initializeCourses(){
    offset = 0;
    active_page = 1;

    ajaxGetCourses({
        offset: offset,
        per_page: per_page
    }, function(resultData){
        console.log(resultData);
        filtered_count = resultData.filtered_count;

        displayCourses(resultData.courses);

        let nOfPages = Math.ceil(resultData.filtered_count/per_page);
        displayPagination(nOfPages,active_page);
    });
}

function applyFilters(){
    collectFilters();

    let data = filters;

    offset = 0;
    active_page = 1;

    data["offset"] = offset;
    data["per_page"] = per_page;

    ajaxGetCourses(data, function(responseData){
        console.log("Courses fetched successfuly.");
        console.log(responseData);
        filtered_count = responseData.filtered_count;

        displayCourses(responseData.courses);

        let nOfPages = Math.ceil(responseData.filtered_count/per_page);
        displayPagination(nOfPages,active_page);
    });
}

function displayPagination(nOfPages, activePage){
    let content = ``;

    let container = $("#pagination-container");

    content += `<a href="#" class="btn_mange_pagging mb-2 pagination-btn prev-next-btn" data-inc="-1">
                            <i class="fa fa-long-arrow-left"></i><span class="d-lg-inline-block d-none"> Previous </span>
                        </a>`;

    for(let i = 1; i <= nOfPages; i++){
        if(i == activePage){
            content += `<a href="#" class="btn_pagging mb-2 pagination-btn page-btn" data-page="${i}">${i}</a>`;
        }
        else{
            content += `<a href="#" class="btn_pagging mb-2 pagination-btn page-btn page-btn-selected" data-page="${i}">${i}</a>`;
        }
    }

    content += `<a href="#" class="btn_mange_pagging mb-2 pagination-btn prev-next-btn" data-inc="1">
                            <span class="d-lg-inline-block d-none">Next</span> <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp;
                        </a>`;

    $(container).html(content);

    $(".pagination-btn").click(goToPage);
}
function displayCourses(courses){
    let content = ``;

    let container = $(".course-container");
    $(container).html("");

    courses.forEach(function(course){
        content += `<div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="${ course.images[0].src}" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="/courses/${course.id}" class="fh5co_magna py-2"> ${ course.name }</a>
                        <br>
                        <a href="#" class="fh5co_mini_time py-1 pb-3"> ${course.author.first_name + " " + course.author.last_name} -
                        ${course.release_date} </a>
                        <div>
                            ${course.description.substr(0, 120)} ...
                        </div>
                        <div class="d-flex justify-content-end mr-4">
                            <span style="color:red; font-size: 18px">`;

                            if(course.price == 0) content+= `FREE`;
                            else content += `${ Math.round(course.price * 100) / 100 }$`;

                            content+=
                        `</span></div>
                    </div>
                    </div>`;
    });

    $(container).append(content);
}

function goToPage(e){
    e.preventDefault();

    if($(this).attr("data-inc")){
        let inc = parseInt($(this).data("inc"));

        console.log(inc);
        offset += per_page * inc;
        active_page+= inc;

        if(offset < 0 || offset > filtered_count){
            offset -= per_page * inc;
            active_page-= inc;
        }
    }
    else{
        let page = parseInt($(this).data("page"));
        offset = (page - 1) * per_page;

        active_page = page;
    }

    let data = filters;
    data["offset"] = offset;
    data["per_page"] = per_page;

    ajaxGetCourses(data, function(responseData){

        console.log(filters);
        filtered_count = responseData.filtered_count;

        displayCourses(responseData.courses);

        let nOfPages = Math.ceil(responseData.filtered_count/per_page);
        displayPagination(nOfPages,active_page);
    });
}

function collectFilters(){
    let filters = {}

    let languages = [];
    $(".language-filter").each(function(){
        if($(this).is(":checked"))
            languages.push($(this).val());
    })
    if(languages.length > 0)
        filters["languages"] = languages;

    if($("#category-filter").val() != "-1")
        filters["category"] = $("#category-filter").val();

    if($("#difficulty-filter").val() != "-1")
        filters["difficulty"] = $("#difficulty-filter").val();

    if($("#course-search").val() != "")
        filters["search"] = $("#course-search").val();

    this.filters = filters;
}
function ajaxGetCourses(data, successCallback){
    $.ajax({
        url: "/courses/pagination",
        method: "GET",
        data: data,
        success: successCallback,
        error: function (xhr, statusText, error){
            console.log(xhr.responseText);
            alert("Error loading courses");
        }
    });
}
