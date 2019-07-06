function getFormatDate(date) {
    var months = ['January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var date = new Date(date);
    date = date.getDate() + " " + months[date.getMonth()] + ", " + date.getFullYear();
    return date;
}

function populateIssues(obj) {
    var issues = JSON.parse(obj);
    var i, l = issues.length;
    var issue;
    issues_holder.innerHTML = "";
    for(i = 0; i < l; i++) {
        issue = `
        <div class="col-md-4 col-sm-6 p-2">
            <div class="col p-3 h-100 bg-light rounded overflow-hidden shadow-sm-hover border-trans">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <h5 class="m-0 font-weight-normal">#${issues[i].iid}</h5>
                    <a class="btn btn-primary btn-sm" href="${issues[i].web_url}" data-toggle="tooltip" title="View on Gitlab"><i class="fab fa-gitlab"></i></a>
                </div>
                <div class="d-flex align-items-center p-2">
                    <h6 class="card-title">${issues[i].title}</h6>
                </div>
                <div class="d-flex flex-column justify-content-center text-muted p-2">
                    <p class="m-0">Opened on ${getFormatDate(issues[i].created_at)}</p>
                    <p class="m-0">by <a href="${issues[i].author.web_url}">${issues[i].author.name}</a></p>
                </div>
            </div>
        </div>
        `;
        issues_holder.innerHTML += issue;
    }
}

function getIssues() {

}

var issues_holder = document.querySelector("#issues");
issues_holder.innerHTML = "Loading...";
var ajax = new XMLHttpRequest();
ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        populateIssues(this.responseText);
    }
};
ajax.open("GET", "https://gitlab.gnome.org/api/v4/projects/665/issues?state=opened", true);
ajax.send();