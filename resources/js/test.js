$(document).ready(function () {
    $("button#submit").click(function () {
        alert("Your comment has been posted!");
        $.post("doAddComment.php", $("#operands").serialize());
    });
     
    $("button#loadcommentsMB").click(commentHandlerMB);
    
    $("button#loadcommentsPC").click(commentHandlerPC);
    
    function commentHandlerMB() {
        alert("Comments updated!");
        $("#newCommentbox").html("");
        $.get("classes/Database/container.html", function(my_var) {
        var n = my_var.split("\n");
        var HTMLcode = "";
        var tp = new Array();
        
        for (var k = 0; k < n.length; k++){
            tp[k] = n[k].substring(n[k].lastIndexOf("n>") + 2,n[k].lastIndexOf("</p"));
        }

        for (var i = 0; i < n.length; i++) {
            var result = n[i].match($("#nickNameLabel").text());
            if(result == $("#nickNameLabel").text() && ($("#nickNameLabel").text() != "")) {
            var deleteComment = $("<form id = \"delMB\" method = \"POST\" onsubmit=\"return false\">");
            $(n[i]).appendTo(deleteComment);
            $("<input type=\"hidden\" name=\"Delete\">").appendTo(deleteComment);
            $("<input type=\"hidden\" value = \"meatball\" name = \"containerType\">").appendTo(deleteComment);
            $("<input type='hidden' name='timestamp' value='" +
                            tp[i] + "'/></form>").appendTo(deleteComment);
            $("<button>Delete</button>").click(deleteButtonHandler).appendTo(deleteComment);
            $(deleteComment).appendTo("#newCommentbox");
            
            }
            
            else {
                var addComment =$(n[i]).appendTo("#newCommentbox");
            }
        }
    });} 

    function commentHandlerPC() {
        alert("Comments updated!");
        $("#newCommentboxPC").html("");
        $.get("classes/Database/containerPancakes.html", function(my_var) {
        var n = my_var.split("\n");
        //var HTMLcode = "";
        var tp = new Array();
        
        for (var k = 0; k < n.length; k++){
            tp[k] = n[k].substring(n[k].lastIndexOf("n>") + 2,n[k].lastIndexOf("</p"));
        }

        for (var i = 0; i < n.length; i++) {
            var result = n[i].match($("#nickNameLabelPC").text());
            if(result == $("#nickNameLabelPC").text() && ($("#nickNameLabelPC").text() != "")) {
            var deleteComment = $("<form id = \"delPC\" method = \"POST\" onsubmit=\"return false\">");
            $(n[i]).appendTo(deleteComment);
            $("<input type=\"hidden\" name=\"Delete\">").appendTo(deleteComment);
            $("<input type=\"hidden\" value = \"pancake\" name = \"containerType\">").appendTo(deleteComment);
            $("<input type='hidden' name='timestamp' value='" +
                            tp[i] + "'/></form>").appendTo(deleteComment);
            $("<button>Delete</button>").click(deleteButtonHandler).appendTo(deleteComment);
            $(deleteComment).appendTo("#newCommentboxPC");
            
            }
            
            else {
                var addComment =$(n[i]).appendTo("#newCommentboxPC");
            }
        }
    });} 
    
    function deleteButtonHandler(){
        $.post("doDeleteComment.php", $(this).siblings("input").serialize());
        alert("Comment deleted!");
    }
});