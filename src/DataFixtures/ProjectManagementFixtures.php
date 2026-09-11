<?php

namespace App\DataFixtures;

use App\Entity\ProjectManagement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;

class ProjectManagementFixtures extends Fixture implements FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['project_management'];
    }

    public function load(ObjectManager $manager): void
    {
        $methods = [

            /*
             * ============================================================
             * AGILE
             * ============================================================
             */

            'Agile',
            'Agile Manifesto',
            'Agile Project Management',
            'Agile Software Development',
            'Agile Modeling',
            'Agile Unified Process',
            'AUP',
            'Adaptive Software Development',
            'ASD',
            'Crystal',
            'Crystal Clear',
            'Crystal Orange',
            'Crystal Red',
            'Dynamic Systems Development Method',
            'DSDM',
            'Feature Driven Development',
            'FDD',
            'Extreme Programming',
            'XP',
            'Lean Software Development',
            'Lean',
            'Lean Startup',
            'Kanban',
            'Scrumban',
            'Scrum',
            'Disciplined Agile',
            'DA',
            'Nexus',
            'LeSS',
            'Large Scale Scrum',
            'SAFe',
            'Scaled Agile Framework',
            'Scrum@Scale',
            'Spotify Model',
            'Shape Up',

            /*
             * ============================================================
             * SCRUM
             * ============================================================
             */

            'Scrum',
            'Scrum Guide',
            'Scrum of Scrums',
            'ScrumBan',
            'Scrumban',
            'Nexus',
            'LeSS',
            'Large-Scale Scrum',
            'Scrum@Scale',
            'Enterprise Scrum',
            'Evidence-Based Management',
            'EBM',

            /*
             * ============================================================
             * KANBAN
             * ============================================================
             */

            'Kanban',
            'Personal Kanban',
            'Team Kanban',
            'Enterprise Kanban',
            'Kanban Method',
            'Kanban Maturity Model',
            'KMM',
            'Scrumban',

            /*
             * ============================================================
             * LEAN
             * ============================================================
             */

            'Lean',
            'Lean Management',
            'Lean Software Development',
            'Lean Product Development',
            'Lean Startup',
            'Lean UX',
            'Lean IT',
            'Lean Six Sigma',
            'Value Stream Mapping',
            'VSM',
            'Kaizen',
            'Continuous Improvement',
            'Just In Time',
            'JIT',
            '5S',
            'Poka-Yoke',
            'Muda',
            'Mura',
            'Muri',

            /*
             * ============================================================
             * WATERFALL / TRADITIONNEL
             * ============================================================
             */

            'Waterfall',
            'Cascade',
            'Modèle en cascade',
            'Sequential Model',
            'V-Model',
            'V-Model XT',
            'Spiral Model',
            'Iterative Model',
            'Incremental Model',
            'Prototyping Model',
            'Big Bang Model',

            /*
             * ============================================================
             * HYBRID / ADAPTIVE
             * ============================================================
             */

            'Hybrid Project Management',
            'Hybrid Agile',
            'Agile-Waterfall',
            'Water-Scrum-Fall',
            'Iterative and Incremental Development',
            'IID',
            'Adaptive Project Management',
            'APM',
            'Rolling Wave Planning',
            'Progressive Elaboration',

            /*
             * ============================================================
             * SCALED AGILE
             * ============================================================
             */

            'SAFe',
            'Scaled Agile Framework',
            'SAFe Essential',
            'SAFe Portfolio',
            'SAFe Large Solution',
            'SAFe Full',
            'Scrum@Scale',
            'Nexus',
            'LeSS',
            'LeSS Huge',
            'Disciplined Agile',
            'DA',
            'Spotify Model',
            'Enterprise Scrum',
            'Scrum of Scrums',

            /*
             * ============================================================
             * EXTREME PROGRAMMING
             * ============================================================
             */

            'Extreme Programming',
            'XP',
            'Test Driven Development',
            'TDD',
            'Behavior Driven Development',
            'BDD',
            'Acceptance Test Driven Development',
            'ATDD',
            'Specification by Example',
            'Pair Programming',
            'Mob Programming',
            'Continuous Integration',
            'Continuous Delivery',
            'Continuous Deployment',
            'Refactoring',
            'Simple Design',
            'Collective Code Ownership',

            /*
             * ============================================================
             * DEVOPS / DELIVERY
             * ============================================================
             */

            'DevOps',
            'DevSecOps',
            'BizDevOps',
            'GitOps',
            'DataOps',
            'MLOps',
            'AIOps',
            'FinOps',
            'Continuous Integration',
            'CI',
            'Continuous Delivery',
            'CD',
            'Continuous Deployment',
            'Continuous Testing',
            'Continuous Monitoring',
            'Infrastructure as Code',
            'IaC',
            'Trunk-Based Development',
            'Git Flow',
            'GitHub Flow',
            'GitLab Flow',
            'Release Train',
            'Release Management',

            /*
             * ============================================================
             * PROJECT MANAGEMENT — GENERAL
             * ============================================================
             */

            'Project Management',
            'Traditional Project Management',
            'Modern Project Management',
            'Digital Project Management',
            'IT Project Management',
            'Software Project Management',
            'Product Management',
            'Product Development',
            'Program Management',
            'Portfolio Management',
            'Project Portfolio Management',
            'PPM',
            'Program Increment',
            'PI Planning',
            'Roadmapping',
            'Product Roadmap',
            'Release Planning',
            'Sprint Planning',
            'Iteration Planning',
            'Backlog Management',
            'Requirements Management',
            'Scope Management',
            'Change Management',
            'Risk Management',
            'Issue Management',
            'Dependency Management',
            'Resource Management',
            'Capacity Planning',
            'Budget Management',
            'Cost Management',
            'Quality Management',
            'Stakeholder Management',
            'Communication Management',
            'Knowledge Management',

            /*
             * ============================================================
             * PMI / PMBOK
             * ============================================================
             */

            'PMBOK',
            'PMBOK Guide',
            'PMI',
            'Project Management Institute',
            'PMI Process Groups',
            'PMI Knowledge Areas',
            'PMI Agile',
            'Disciplined Agile',
            'PMI Talent Triangle',
            'Earned Value Management',
            'EVM',
            'Critical Path Method',
            'CPM',
            'Program Evaluation and Review Technique',
            'PERT',
            'Work Breakdown Structure',
            'WBS',
            'Organizational Breakdown Structure',
            'OBS',
            'Responsibility Assignment Matrix',
            'RAM',
            'RACI',

            /*
             * ============================================================
             * PRINCE2
             * ============================================================
             */

            'PRINCE2',
            'PRINCE2 Agile',
            'PRINCE2 7',
            'PRINCE2 Foundation',
            'PRINCE2 Practitioner',
            'PRINCE2 Themes',
            'PRINCE2 Processes',
            'PRINCE2 Principles',

            /*
             * ============================================================
             * IPMA
             * ============================================================
             */

            'IPMA',
            'IPMA ICB',
            'IPMA Competence Baseline',
            'IPMA Level A',
            'IPMA Level B',
            'IPMA Level C',
            'IPMA Level D',

            /*
             * ============================================================
             * AXELOS / ITIL
             * ============================================================
             */

            'ITIL',
            'ITIL 4',
            'ITIL Service Management',
            'ITIL Continual Improvement',
            'IT Service Management',
            'ITSM',
            'COBIT',
            'COBIT Governance',

            /*
             * ============================================================
             * PRODUCT MANAGEMENT
             * ============================================================
             */

            'Product Management',
            'Product Discovery',
            'Product Delivery',
            'Product-Led Growth',
            'PLG',
            'Product-Led Development',
            'Outcome-Driven Innovation',
            'ODI',
            'Jobs To Be Done',
            'JTBD',
            'Design Thinking',
            'Design Sprint',
            'Google Design Sprint',
            'Lean UX',
            'Dual Track Agile',
            'Dual Track Development',
            'Continuous Discovery',
            'Opportunity Solution Tree',
            'OST',
            'Impact Mapping',
            'Story Mapping',
            'User Story Mapping',
            'Example Mapping',
            'Event Storming',

            /*
             * ============================================================
             * REQUIREMENTS / USER STORIES
             * ============================================================
             */

            'Requirements Engineering',
            'Requirements Management',
            'User Stories',
            'User Story Mapping',
            'Use Case Driven Development',
            'Use Cases',
            'Acceptance Criteria',
            'Definition of Done',
            'Definition of Ready',
            'INVEST',
            'Three Amigos',
            'Behavior Driven Development',
            'BDD',
            'Specification by Example',
            'Example Mapping',
            'Impact Mapping',
            'Event Storming',
            'Domain Storytelling',

            /*
             * ============================================================
             * ESTIMATION
             * ============================================================
             */

            'Planning Poker',
            'Story Points',
            'T-Shirt Sizing',
            'Affinity Estimation',
            'Bucket System',
            'Dot Voting',
            'Three Point Estimation',
            'PERT Estimation',
            'Function Point Analysis',
            'FPA',
            'COSMIC Function Points',
            'Use Case Points',
            'Wideband Delphi',
            'Delphi Technique',
            'Expert Judgment',
            'Relative Estimation',
            'Absolute Estimation',

            /*
             * ============================================================
             * PRIORISATION
             * ============================================================
             */

            'MoSCoW',
            'MoSCoW Prioritization',
            'RICE',
            'RICE Scoring',
            'ICE',
            'ICE Scoring',
            'Kano Model',
            'WSJF',
            'Weighted Shortest Job First',
            'Cost of Delay',
            'Value vs Effort',
            'Impact vs Effort',
            'Opportunity Scoring',
            'Buy a Feature',
            '100 Dollar Test',
            'Dot Voting',
            'Stack Ranking',

            /*
             * ============================================================
             * RISK MANAGEMENT
             * ============================================================
             */

            'Risk Management',
            'Risk Matrix',
            'Risk Assessment',
            'Risk Register',
            'Risk Breakdown Structure',
            'RBS',
            'FMEA',
            'Failure Mode and Effects Analysis',
            'Fault Tree Analysis',
            'FTA',
            'Bow-Tie Analysis',
            'Monte Carlo Simulation',
            'Risk Burndown',
            'Risk-Based Planning',
            'Pre-Mortem',
            'Post-Mortem',
            'Blameless Post-Mortem',

            /*
             * ============================================================
             * QUALITY
             * ============================================================
             */

            'Quality Management',
            'Quality Assurance',
            'Quality Control',
            'Total Quality Management',
            'TQM',
            'Six Sigma',
            'DMAIC',
            'DMADV',
            'PDCA',
            'Plan Do Check Act',
            'Kaizen',
            'Continuous Improvement',
            'Root Cause Analysis',
            'RCA',
            'Five Whys',
            'Fishbone Diagram',
            'Ishikawa Diagram',
            'Pareto Analysis',

            /*
             * ============================================================
             * FLOW / PERFORMANCE
             * ============================================================
             */

            'Little’s Law',
            'Little Law',
            'Cycle Time',
            'Lead Time',
            'Throughput',
            'Work In Progress',
            'WIP Limits',
            'Cumulative Flow Diagram',
            'CFD',
            'Value Stream Mapping',
            'Flow Efficiency',
            'Process Cycle Efficiency',
            'Queue Management',
            'Bottleneck Analysis',
            'Theory of Constraints',
            'TOC',

            /*
             * ============================================================
             * AGILE CEREMONIES / PRACTICES
             * ============================================================
             */

            'Daily Scrum',
            'Daily Stand-up',
            'Sprint Planning',
            'Sprint Review',
            'Sprint Retrospective',
            'Backlog Refinement',
            'Backlog Grooming',
            'Iteration Planning',
            'Iteration Review',
            'Iteration Retrospective',
            'Release Planning',
            'Product Increment',
            'Sprint Goal',
            'Product Goal',
            'Definition of Done',
            'Definition of Ready',
            'Scrum Retrospective',
            'Team Retrospective',
            'Demo',
            'Show and Tell',

            /*
             * ============================================================
             * RETROSPECTIVES
             * ============================================================
             */

            'Retrospective',
            'Agile Retrospective',
            'Sprint Retrospective',
            'Start Stop Continue',
            'Mad Sad Glad',
            'Went Well Did Not Go Well',
            '4Ls',
            'Liked Learned Lacked Longed For',
            'Sailboat Retrospective',
            'Starfish Retrospective',
            'Speedboat Retrospective',
            'Three Little Pigs',
            'Mountain Climber',
            'Timeline Retrospective',
            'Lean Coffee',
            'ORID',
            '5 Whys Retrospective',
            'Appreciative Retrospective',

            /*
             * ============================================================
             * TEAM MANAGEMENT
             * ============================================================
             */

            'Team Management',
            'Agile Team Management',
            'Self-Managing Teams',
            'Self-Organizing Teams',
            'Cross-Functional Teams',
            'Feature Teams',
            'Component Teams',
            'Distributed Teams',
            'Remote Team Management',
            'Team Topologies',
            'Team Topologies Model',
            'Conway’s Law',
            'Dunbar’s Number',
            'Tuckman Model',
            'Forming Storming Norming Performing',
            'Belbin Team Roles',
            'Situational Leadership',
            'Servant Leadership',
            'Management 3.0',

            /*
             * ============================================================
             * ENGINEERING / SOFTWARE DELIVERY
             * ============================================================
             */

            'Software Development Life Cycle',
            'SDLC',
            'Secure SDLC',
            'DevSecOps',
            'Software Development Methodology',
            'Iterative Development',
            'Incremental Development',
            'Continuous Integration',
            'Continuous Delivery',
            'Continuous Deployment',
            'Trunk-Based Development',
            'Feature Branching',
            'Git Flow',
            'GitHub Flow',
            'GitLab Flow',
            'Release Branching',
            'Feature Flags',
            'Dark Launching',
            'Canary Releases',
            'Blue Green Deployment',
            'Rolling Deployment',

            /*
             * ============================================================
             * UX / DESIGN / PRODUCT
             * ============================================================
             */

            'Design Thinking',
            'Lean UX',
            'User-Centered Design',
            'Human-Centered Design',
            'User Experience Design',
            'Service Design',
            'Double Diamond',
            'Design Sprint',
            'Google Design Sprint',
            'Design Critique',
            'User Research',
            'Usability Testing',
            'User Journey Mapping',
            'Customer Journey Mapping',
            'Experience Mapping',
            'Empathy Mapping',
            'Service Blueprint',
            'User Story Mapping',
            'Jobs To Be Done',
            'JTBD',

            /*
             * ============================================================
             * STRATEGY
             * ============================================================
             */

            'OKR',
            'Objectives and Key Results',
            'KPI Management',
            'Balanced Scorecard',
            'North Star Metric',
            'North Star Framework',
            'SMART Goals',
            'SMART Objectives',
            'EOS',
            'Entrepreneurial Operating System',
            'Hoshin Kanri',
            'Strategy Deployment',
            'SWOT Analysis',
            'PESTEL Analysis',
            'Business Model Canvas',
            'Lean Canvas',
            'Value Proposition Canvas',

            /*
             * ============================================================
             * PLANNING
             * ============================================================
             */

            'Roadmap',
            'Product Roadmap',
            'Technology Roadmap',
            'Release Roadmap',
            'Strategic Roadmap',
            'Capacity Planning',
            'Resource Planning',
            'Release Planning',
            'Sprint Planning',
            'Iteration Planning',
            'Quarterly Planning',
            'Annual Planning',
            'Rolling Planning',
            'Rolling Wave Planning',
            'Milestone Planning',
            'Critical Path Method',
            'CPM',
            'PERT',
            'Gantt Planning',

            /*
             * ============================================================
             * SCHEDULING
             * ============================================================
             */

            'Gantt Chart',
            'Critical Path Method',
            'CPM',
            'Critical Chain Project Management',
            'CCPM',
            'PERT',
            'Program Evaluation and Review Technique',
            'Resource Leveling',
            'Resource Smoothing',
            'Timeboxing',
            'Time Box',
            'Cadence-Based Planning',

            /*
             * ============================================================
             * PROJECT CONTROL
             * ============================================================
             */

            'Earned Value Management',
            'EVM',
            'Cost Performance Index',
            'CPI',
            'Schedule Performance Index',
            'SPI',
            'Variance Analysis',
            'Schedule Variance',
            'Cost Variance',
            'Milestone Tracking',
            'Burndown Chart',
            'Burnup Chart',
            'Velocity Tracking',
            'Cumulative Flow Diagram',
            'Control Chart',
            'Cycle Time Scatterplot',

            /*
             * ============================================================
             * CHANGE MANAGEMENT
             * ============================================================
             */

            'Change Management',
            'Organizational Change Management',
            'OCM',
            'ADKAR',
            'Kotter 8-Step Change Model',
            'Lewin Change Management',
            'McKinsey 7-S',
            'Bridges Transition Model',
            'Satir Change Model',
            'Change Impact Analysis',
            'Change Control',
            'Change Request Management',

            /*
             * ============================================================
             * KNOWLEDGE / DOCUMENTATION
             * ============================================================
             */

            'Knowledge Management',
            'Documentation Driven Development',
            'Docs as Code',
            'Architecture Decision Records',
            'ADR',
            'Decision Log',
            'Project Log',
            'Runbook',
            'Playbook',
            'Project Handbook',
            'Team Handbook',
            'Working Agreement',
            'Team Charter',

            /*
             * ============================================================
             * ARCHITECTURE / DOMAIN
             * ============================================================
             */

            'Domain Driven Design',
            'DDD',
            'Event Storming',
            'Domain Storytelling',
            'Architecture Decision Records',
            'ADR',
            'Evolutionary Architecture',
            'Architecture Fitness Functions',
            'Team Topologies',
            'Wardley Mapping',
            'Impact Mapping',

            /*
             * ============================================================
             * STARTUP / ENTREPRENEURSHIP
             * ============================================================
             */

            'Lean Startup',
            'Business Model Canvas',
            'Lean Canvas',
            'Design Thinking',
            'Customer Development',
            'Build Measure Learn',
            'Minimum Viable Product',
            'MVP',
            'Minimum Marketable Product',
            'MMP',
            'Product Market Fit',
            'PMF',
            'Growth Hacking',
            'Product-Led Growth',
            'PLG',
            'Jobs To Be Done',

            /*
             * ============================================================
             * OTHER / GENERAL PURPOSE
             * ============================================================
             */

            'Critical Chain',
            'Critical Chain Project Management',
            'Theory of Constraints',
            'TOC',
            'Six Sigma',
            'Total Quality Management',
            'TQM',
            'ISO 21500',
            'ISO 21502',
            'PMBOK',
            'PRINCE2',
            'IPMA',
            'ITIL',
            'COBIT',
            'Agile',
            'Scrum',
            'Kanban',
            'Lean',
            'Waterfall',
            'Hybrid',
        ];

        /*
         * Suppression des doublons.
         */
        $methods = array_values(array_unique($methods));

        /*
         * Création des entités.
         */
        foreach ($methods as $name) {
            $projectManagement = new ProjectManagement();
            $projectManagement->setName($name);

            $manager->persist($projectManagement);
        }

        $manager->flush();
    }
}
