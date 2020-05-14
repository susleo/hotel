    <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="large" id="togBtn" name="status" value="1" onclick="getValue()">

    <script>
    	 function getValue(){
                if (document.getElementById('togBtn').checked) {
                    console.log("Checked");
                    document.getElementById('togBtn').setAttribute("value", "1");

                } else {
                    console.log("Not Checked");
                    document.getElementById('togBtn').setAttribute("value", "0");
                }
                console.log(document.getElementById('togBtn').getAttribute("value"));

            }
    </script>