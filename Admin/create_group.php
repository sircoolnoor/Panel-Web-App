<html>
    <head>
        <title>
            Create Group
        </title>
    </head>

    <script>
        $('#groupCode').on('input',function(e) {
            alert('Changed!')
        });

        function check(){
            // Things to do when the textbox changes
        }

    </script>

    
    <body>
        <div>
            <form>
                <label for="groupCode">Group Code:</label>
                <input type='text' id='groupCode' name='groupcode'><br>
                <label for="groupName">Group Name:</label>
                <input type='text' id='groupname' name='groupname'><br>
                <label for="projectTitle">Project Title:</label>
                <input type='text' id='projectTitle' name='projectTitle'><br>
                <label for="Program">Program:</label>
                <input type='text' id='program' name='program'><br>
                <label for="specialization">Specialization:</label>
                <input type='text' id='specialization' name='specialization'><br>
                <label for="totalProp">Total Proponents:</label>
                <input type="text" id="totalProp" name='totalProp' value=1 autocomplete='off' pattern='\d*' maxlength="1" onchange="check();" onkeyup="this.onchange();"><br>
                <label for="Proponents">Proponents:</label>
                <!-- <?php
                    for ($x = 0; $x <= 10; $x++) {
                        echo "The number is: $x <br>";
                    }
                ?> -->
                
            </form>
            
        </div>
    </body>
</html>