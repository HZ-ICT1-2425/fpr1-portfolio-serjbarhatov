<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Study Choice',
                'slug' => 'study-choice',
                'article_source' => null,
                'summary' => 'When it came to selecting a study program, I knew I wanted to pursue a career that was both challenging and rewarding.',
                'body' => "When it came to selecting a study program, I knew I wanted to pursue a career that was both challenging and rewarding.

After careful consideration, I decided on a path that would allow me to combine my passion for technology with my entrepreneurial spirit: app development. My decision to study app development was motivated by several factors. First and foremost, I've always been fascinated by the endless possibilities that technology offers. The ability to create innovative and useful applications that can positively impact people's lives is incredibly exciting to me. Secondly, I've always had an entrepreneurial mindset. I enjoy the idea of starting my own business and building something from the ground up. App development seemed like the perfect avenue for me to pursue my entrepreneurial ambitions.

Upon completing my studies, I plan to establish my own app development company. My goal is to create innovative and high-quality applications that cater to a wide range of users. I believe that technology has the power to transform the world, and I'm eager to contribute to that transformation through my work.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Personal Analysis',
                'slug' => 'personal-analysis',
                'article_source' => 'https://example.com/source2',
                'summary' => "As I reflect on my personal strengths, weaknesses, opportunities, and threats, I've gained a clearer understanding of myself and my potential.",
                'body' => "As I reflect on my personal strengths, weaknesses, opportunities, and threats, I've gained a clearer understanding of myself and my potential.

My strengths include strong soft skills, a responsible attitude, a creative mindset, and a result-oriented approach. These qualities equip me well for the challenges and opportunities that lie ahead. However, I also recognize my weaknesses, such as impatience, perfectionism, and a tendency to be overly focused on details. To overcome these challenges, I'm committed to developing greater patience and flexibility in my approach. Looking ahead, I see numerous opportunities to leverage my skills and knowledge. The growing demand for innovative app development presents a promising landscape for my entrepreneurial aspirations. Additionally, the ability to learn and adapt to new technologies and trends will be crucial in staying competitive.

On the other hand, there are also potential threats to consider, such as the rapid pace of technological advancements and the increasing competition in the app development industry. To mitigate these risks, I believe it's essential to stay informed about industry developments and continuously strive to improve my skills.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Programming Experience',
                'slug' => 'programming-experience',
                'article_source' => 'https://example.com/source3',
                'summary' => "Growing up, I was always fascinated by technology. I spent countless hours tinkering with toys and gadgets, trying to understand how they worked.",
                'body' => "Growing up, I was always fascinated by technology. I spent countless hours tinkering with robots and gadgets, trying to understand how they worked. Little did I know that this early curiosity would eventually lead me down the path of programming.

My first real introduction to programming came during my childhood. I remember spending hours programming simple robots and toys, experimenting with different commands and sequences. It was a thrilling experience to see my creations come to life, responding to the instructions I had given them. Fast forward a few years, and my interest in technology had only grown. I became increasingly intrigued by the fields of data science and machine learning. The idea of using data to solve real-world problems was incredibly exciting to me. Two years ago, I decided to dive headfirst into the world of programming. I started by learning Python and SQL, two essential languages for data science and machine learning. It was a challenging experience. There were countless times when I felt overwhelmed and frustrated, but I persevered, determined to master these skills.

Today, I'm proud to say that I'm studying IT at university. My journey has been filled with ups and downs, but I'm grateful for the opportunities it has given me. I'm excited to see where my programming skills will take me in the future.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'First Feedback',
                'slug' => 'first-feedback',
                'article_source' => 'https://example.com/source3',
                'summary' => "Feedback is a powerful tool that can shape our lives in profound ways. Whether it's in our personal relationships, our careers, or our hobbies, feedback plays a crucial role in our growth and development.",
                'body' => "Feedback is a powerful tool that can shape our lives in profound ways. Whether it's in our personal relationships, our careers, or our hobbies, feedback plays a crucial role in our growth and development.

It's like a mirror reflecting our strengths and weaknesses, providing us with valuable insights that we can use to improve. Not all feedback is created equal. Constructive feedback is the type that is given with the intention of helping us learn and grow. It's specific, actionable, and delivered in a respectful manner. When we receive constructive feedback, it's an opportunity to reflect on our actions, identify areas for improvement, and make positive changes.

Think of feedback as a gift. It's a chance to gain a new perspective, to learn from our mistakes, and to become a better version of ourselves. When we embrace feedback with an open mind, we can unlock our full potential and achieve our goals. It's important to actively seek feedback from others. Whether it's asking for input on a project, requesting feedback on a presentation, or simply asking a friend for their honest opinion, seeking feedback shows that we value the opinions of others and are committed to continuous improvement. Just as it's important to seek feedback, it's also important to give feedback to others. When we give feedback, we can help others grow and develop. It's a way to show that we care about their success and that we're invested in their well-being.

Feedback is a powerful tool that can help us grow, learn, and achieve our goals. By seeking and giving feedback, we can create a more positive and productive environment for ourselves and those around us. Let's embrace feedback as a valuable gift and use it to become the best versions of ourselves.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
