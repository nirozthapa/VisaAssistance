<?php


/**
 * Class AnswerOption
 */
class AnswerOption extends Database
{
    /**
     * AnswerOption constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $QuestionId
     * @return array
     */
    function getActiveQuestionOptionsByQuestionId($QuestionId)
    {
        $sql = "SELECT * FROM answer_options WHERE question_id = $QuestionId";
        $statement = $this->connection->query($sql);
        $questionOptions = $statement->fetchAll();

        return $questionOptions;
    }

    function getAnswerWeightFromAnswerID($answerId){
        $sql = "SELECT answer_weight FROM answer_options WHERE id = $answerId";
        $statement = $this->connection->query($sql);
        $answerWeight = $statement->fetch();

        return $answerWeight;
    }
}