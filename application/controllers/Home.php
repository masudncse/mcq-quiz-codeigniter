<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public $mcq = array();

    public $result = 0;

    public function __construct()
    {
        parent::__construct();


        /**
         * Start
         */
        array_push($this->mcq, [
            'question' => 'Which of these is not an "output" device?',
            'one' => 'Monitor',
            'two' => 'Printer',
            'three' => 'Computer keyboard',
            'answer' => 'Computer keyboard'
        ]);


        array_push($this->mcq, [
            'question' => 'Which wireless technology allows you to transfer files from one device to another that is a short distance away?',
            'one' => 'A modem',
            'two' => 'Bluetooth',
            'three' => 'GPS',
            'answer' => 'Bluetooth'
        ]);


        array_push($this->mcq, [
            'question' => 'What does KB mean?',
            'one' => 'Knowledge bits',
            'two' => 'Knowledge beast',
            'three' => 'Kilobytes',
            'answer' => 'Kilobytes'
        ]);


        array_push($this->mcq, [
            'question' => 'What does the "C" in ICT stand for?',
            'one' => 'Communications',
            'two' => 'Community',
            'three' => 'Complicated',
            'answer' => 'Communications '
        ]);


        array_push($this->mcq, [
            'question' => 'Which one of the above is a browser?',
            'one' => 'Chrome',
            'two' => 'Facebook',
            'three' => 'Skype',
            'answer' => 'Chrome'
        ]);


        array_push($this->mcq, [
            'question' => 'If someone you don\'t know asks to be your friend on a social networking site, what should you do?',
            'one' => 'Add them',
            'two' => 'Block them',
            'three' => 'Send messages to them',
            'answer' => 'Block them'
        ]);


        array_push($this->mcq, [
            'question' => 'Which of these will help you keep your password safe?',
            'one' => 'Always tell your friends your passwords',
            'two' => 'Use the same password for everything',
            'three' => 'Change your passwords regularly',
            'answer' => 'Change your passwords regularly'
        ]);


        array_push($this->mcq, [
            'question' => 'What is a search engine?',
            'one' => 'A program which protects your computer from viruses',
            'two' => 'A program which organizes your computer',
            'three' => 'A program can find specific data on the web',
            'answer' => 'A program can find specific data on the web'
        ]);


        array_push($this->mcq, [
            'question' => 'If you wanted to use the internet to send a message with a photo or file attachment to a friend, which of these could you send?',
            'one' => 'A text',
            'two' => 'An e-mail',
            'three' => 'A letter',
            'answer' => 'An e-mail'
        ]);


        array_push($this->mcq, [
            'question' => 'What do we call programs which we use to access the internet?',
            'one' => 'Browsers',
            'two' => 'Websites',
            'three' => 'Search engines',
            'answer' => 'Browsers'
        ]);


        array_push($this->mcq, [
            'question' => 'Who owns and controls the internet?',
            'one' => 'Government',
            'two' => 'Bill Gates',
            'three' => 'No one',
            'answer' => 'No one'
        ]);


        array_push($this->mcq, [
            'question' => 'If you were looking at a website and you wished to return to a previous page, you would click which button?',
            'one' => 'Refresh',
            'two' => 'Back',
            'three' => 'Esc',
            'answer' => 'Back'
        ]);


        array_push($this->mcq, [
            'question' => 'What is the easiest way to remember your favorite websites?',
            'one' => 'Trust your memory',
            'two' => 'Bookmark or add them to your favorite',
            'three' => 'You will probably never find the same websites again',
            'answer' => 'Bookmark or add them to your favorite '
        ]);


        array_push($this->mcq, [
            'question' => 'To decorate the edges of a word document, you would add which of the following?',
            'one' => 'Italics',
            'two' => 'A watermark',
            'three' => 'A page border',
            'answer' => 'A page border'
        ]);


        array_push($this->mcq, [
            'question' => 'If you wish to move some text to another place in your document, what can you do?',
            'one' => 'Highlight it, right click, select "cut", click the new position and select "paste"',
            'two' => 'Highlight it, right click and select "paste"',
            'three' => 'Highlight it, press backspace, click the new position and select "paste"',
            'answer' => 'Highlight it, right click, select "cut", click the new position and select "paste"'
        ]);


        array_push($this->mcq, [
            'question' => 'Which button on the toolbar would you use to italicize a word?',
            'one' => 'Bold',
            'two' => 'Italic',
            'three' => 'Highlighter',
            'answer' => 'Italic'
        ]);


        array_push($this->mcq, [
            'question' => '17.	Which key would you press if you wanted to type only in CAPITAL letters?',
            'one' => 'Alt',
            'two' => 'Fn',
            'three' => 'Caps Lock',
            'answer' => 'Caps Lock'
        ]);


        array_push($this->mcq, [
            'question' => '18.	Which one is not hardware?',
            'one' => 'CPU',
            'two' => 'A video game',
            'three' => 'Monitor',
            'answer' => 'A video game'
        ]);


        array_push($this->mcq, [
            'question' => 'The first humanoid robot is ______.',
            'one' => 'Laika',
            'two' => 'Sophia',
            'three' => 'Valentina Tereshkova',
            'answer' => 'Sophia'
        ]);


        array_push($this->mcq, [
            'question' => '_____ bits equal one byte.',
            'one' => 'Eight',
            'two' => 'Two',
            'three' => 'One thousand',
            'answer' => 'Eight'
        ]);


        array_push($this->mcq, [
            'question' => 'Which one is the latest version of iPhone?',
            'one' => 'iPhone  8 plus',
            'two' => 'iPhone X',
            'three' => 'iPhone Y',
            'answer' => 'iPhone X'
        ]);


        array_push($this->mcq, [
            'question' => 'Sophia (the humanoid robot) was activated _______.',
            'one' => 'April 19, 2014',
            'two' => 'April 19, 2015',
            'three' => 'May 19, 2015',
            'answer' => 'April 19, 2015'
        ]);


        array_push($this->mcq, [
            'question' => 'Sophia got the citizenship of ______.',
            'one' => 'Hong kong',
            'two' => 'America',
            'three' => 'Saudi Arabia',
            'answer' => 'Saudi Arabia'
        ]);


        array_push($this->mcq, [
            'question' => 'Who built the world"s biggest battery?',
            'one' => 'Tesla',
            'two' => 'Philco',
            'three' => 'TIAX',
            'answer' => 'Tesla'
        ]);


        array_push($this->mcq, [
            'question' => 'Who is the founder of Google?',
            'one' => 'Larry Page',
            'two' => 'Sergey Brin',
            'three' => 'Both',
            'answer' => 'Both'
        ]);


        array_push($this->mcq, [
            'question' => 'Bangabandhu satellite will be launched in _______.',
            'one' => 'March 2018',
            'two' => 'June 2018',
            'three' => 'September 2018',
            'answer' => 'June 2018'
        ]);


        array_push($this->mcq, [
            'question' => 'Which Award Bangabandhu Satellite project wins?',
            'one' => 'ITU Award',
            'two' => 'APICTA Award',
            'three' => 'Oscar',
            'answer' => 'ITU Award'
        ]);


        array_push($this->mcq, [
            'question' => 'Who is the father of computing?',
            'one' => 'Chad Hurley',
            'two' => 'Kevin Systrom',
            'three' => 'Charles Babbage',
            'answer' => 'Charles Babbage'
        ]);


        /*array_push($this->mcq, [
            'question' => 'QUESTIONQUESTIONQUESTION',
            'one' => 'ONEONEONEONE',
            'two' => 'TWOTWOTWOTWO',
            'three' => 'THREETHREETHREETHREE',
            'answer' => 'ANSWRANSWRANSWR'
        ]);*/


        /**
         * End
         */


    }


    public function index()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }


    public function process()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[subscribers.email]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|is_unique[subscribers.phone]');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone')
            );
            $insert = $this->db->insert('subscribers', $data);
            if ($insert) {
                redirect('home/exam');
            }
        }
    }


    public function exam()
    {
        shuffle($this->mcq);
        $data['mcq'] = $this->mcq;

        $this->load->view('header');
        $this->load->view('exam', $data);
        $this->load->view('footer');
    }


    public function result()
    {


        $q1 = $this->input->post('question1');
        $a1 = $this->input->post('answer1');

        $q2 = $this->input->post('question2');
        $a2 = $this->input->post('answer2');

        $q3 = $this->input->post('question3');
        $a3 = $this->input->post('answer3');

        foreach ($this->mcq as $item) {
            if ($q1 == $item['question']) {
                if ($a1 == $item['answer']) {
                    $this->result += 1;
                } else {
                    $this->result += 0;
                }
            } elseif ($q2 == $item['question']) {
                if ($a2 == $item['answer']) {
                    $this->result += 1;
                } else {
                    $this->result += 0;
                }
            } elseif ($q3 == $item['question']) {
                if ($a3 == $item['answer']) {
                    $this->result += 1;
                } else {
                    $this->result += 0;
                }
            }
        }

        $data['result'] = $this->result;

        $this->load->view('header');
        $this->load->view('result', $data);
        $this->load->view('footer');


    }


}
