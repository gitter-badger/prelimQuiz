<div class="container">
    <div class="row"  >
        <div class="col-md-12">
            <div class="card" style="color: black;margin:70px 80px;">
                <h4 class="card-title animated tada infinite_text" style="padding: 30px 2px 10px 2px;font-weight: 400;">Edit Questions</h4>
                <table class = "table table-hover text-xs-center">
                    <thead>
                    <tr>
                        <th style = "text-align: center">Question No.</th>
                        <th style = "text-align: center">Statement</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    if ($this->questions) {
                        foreach ($this->questions as $question) {
                            echo '<tr>
                                    <td>' . $i++ . '</td>
                                    <td>' . $question->statement . '</td>
                              </tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>