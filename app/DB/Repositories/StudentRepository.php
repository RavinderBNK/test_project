<?php

namespace App\DB\Repositories;

class StudentRepository extends AbstractRepository
{
    /**
     * @param int $id
     * @return array
     */
    public function getStudentInfoForCsmAndCsmbById(int $id)
    {
        $result = $this->db->first("SELECT student.id as id, student.name as name,
            AVG(grade.grade) AS average, board.report_format as format, 
            CASE
                WHEN board.name = 'CSM' 
                    THEN IF(AVG(grade.grade) >= 7 ,'Pass', 'Fail')
                ELSE IF((MAX(grade.grade) > 8 AND COUNT(grade.id) >= 2), 'Pass', 'Fail')
            END AS finalResult
            FROM student
            JOIN grade ON student.id = grade.student_id
            JOIN board ON student.board_id = board.id
            where student.id = " . $this->db->quote($id) . "
            group by grade.student_id"
        );

        $result['grades'] = $this->db->getColumn("SELECT grade.grade as grade
            FROM grade
            WHERE grade.student_id = " . $this->db->quote($id)
        );

        return $result;
    }
}