<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample blog posts based on your HTML
        $blogPosts = [
            [
                'title' => '5 Ways to Practice Mindfulness Daily',
                'excerpt' => 'Discover simple yet effective mindfulness techniques that you can incorporate into your daily routine to reduce stress and improve mental clarity...',
                'category' => 'Mindfulness',
                'published' => true,
            ],
            [
                'title' => 'Understanding Anxiety Triggers',
                'excerpt' => 'Learn how to identify and manage your anxiety triggers to regain control of your emotional responses and develop healthier coping mechanisms...',
                'category' => 'Anxiety',
                'published' => true,
            ],
            [
                'title' => 'The Power of Connection in Healing',
                'excerpt' => 'Explore how human connection and supportive relationships play a crucial role in mental health recovery and ongoing emotional wellbeing...',
                'category' => 'Relationships',
                'published' => true,
            ],
            [
                'title' => 'Building Resilience Through Adversity',
                'excerpt' => 'Discover strategies to develop emotional resilience and learn how challenges can become opportunities for personal growth and transformation...',
                'category' => 'Self-Care',
                'published' => true,
            ],
            [
                'title' => 'Navigating Grief: A Compassionate Guide',
                'excerpt' => 'A thoughtful exploration of the grief process and gentle guidance on how to honor your emotions while moving forward with compassion...',
                'category' => 'Trauma',
                'published' => true,
            ],
            [
                'title' => 'Self-Care Isn\'t Selfish: Setting Healthy Boundaries',
                'excerpt' => 'Learn why establishing boundaries is essential for your mental health and discover practical ways to communicate your needs effectively...',
                'category' => 'Self-Care',
                'published' => true,
            ],
        ];

        foreach ($blogPosts as $post) {
            $category = Category::where('name', $post['category'])->first();
            
            if ($category) {
                $content = $this->generateSampleContent($post['title']);
                
                BlogPost::create([
                    'title' => $post['title'],
                    'slug' => Str::slug($post['title']),
                    'excerpt' => $post['excerpt'],
                    'content' => $content,
                    'category_id' => $category->id,
                    'published' => $post['published'],
                    'published_at' => now()->subDays(rand(1, 30)),
                    'image_path' => null, // You would need to handle image uploads separately
                ]);
            }
        }
        
        // Create additional random posts if desired
        // BlogPost::factory(10)->create();
    }
    
    /**
     * Generate sample content for blog posts.
     */
    private function generateSampleContent($title)
    {
        // A simple function to generate some placeholder content based on the title
        $paragraphs = [];
        
        $paragraphs[] = "<h2>Introduction</h2>";
        $paragraphs[] = "<p>Welcome to our article on " . strtolower(str_replace([':', '5'], '', $title)) . ". This post will explore key aspects of this important topic and provide practical guidance you can use in your daily life.</p>";
        
        $paragraphs[] = "<h2>Why This Matters</h2>";
        $paragraphs[] = "<p>Understanding " . strtolower(str_replace([':', '5'], '', $title)) . " can significantly impact your mental wellbeing and quality of life. Research has shown that addressing these aspects of mental health can lead to improved relationships, better stress management, and overall life satisfaction.</p>";
        
        $paragraphs[] = "<h2>Key Points to Consider</h2>";
        $paragraphs[] = "<ul>
            <li>The importance of awareness and recognition</li>
            <li>Developing practical strategies for implementation</li>
            <li>Building consistent habits that support mental health</li>
            <li>Connecting with others for support and accountability</li>
        </ul>";
        
        $paragraphs[] = "<h2>Practical Steps</h2>";
        $paragraphs[] = "<p>Here are some practical steps you can take to begin your journey:</p>";
        $paragraphs[] = "<ol>
            <li>Start with small, manageable changes to your daily routine</li>
            <li>Track your progress and celebrate small victories</li>
            <li>Be patient with yourself as you develop new habits</li>
            <li>Seek professional guidance when needed</li>
        </ol>";
        
        $paragraphs[] = "<h2>Conclusion</h2>";
        $paragraphs[] = "<p>Remember that improving your mental health is a journey, not a destination. By incorporating these strategies into your life, you'll be taking important steps toward greater wellbeing and emotional balance.</p>";
        
        return implode("\n\n", $paragraphs);
    }
}