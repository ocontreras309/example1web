<?php
    
    /**
     * students_controller.php
     * Implementa los servicios para realizar altas, bajas, modificaciones y lectura
     * de datos de estudiantes
     */

    require 'student_dao.php';
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    class StudentsController {
        private $studentDAO;

        public function __construct() {
            $this->studentDAO = new StudentDAO();
        }

        public function getStudents() {
            return $this->studentDAO->findStudents();
        }

        public function getStudentById($id) {
            return $this->studentDAO->findStudentById($id);
        }

        public function postStudentForm($form) {
            $student = new Student(
                $form['firstName'],
                $form['lastName'],
                $form['city'],
                $form['semester']
            );
            return $this->studentDAO->save($student);
        }

        public function postStudent($jsonStudent) {
            $studentArray = json_decode($jsonStudent, true);
            $student = new Student(
                $studentArray['firstName'],
                $studentArray['lastName'],
                $studentArray['city'],
                $studentArray['semester']
            );
            return $this->studentDAO->save($student);
        }

        public function putStudent($jsonStudent) {
            $studentArray = json_decode($jsonStudent, true);
            $student = new Student(
                $studentArray['firstName'],
                $studentArray['lastName'],
                $studentArray['city'],
                $studentArray['semester'],
                $studentArray['id']
            );
            return $this->studentDAO->update($student);
        }

        public function deleteStudent($id) {
            return $this->studentDAO->delete($id);
        }
    }