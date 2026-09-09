---
name: Executive Slate
colors:
  surface: '#0b1326'
  surface-dim: '#0b1326'
  surface-bright: '#31394d'
  surface-container-lowest: '#060e20'
  surface-container-low: '#131b2e'
  surface-container: '#171f33'
  surface-container-high: '#222a3d'
  surface-container-highest: '#2d3449'
  on-surface: '#dae2fd'
  on-surface-variant: '#c2c6d6'
  inverse-surface: '#dae2fd'
  inverse-on-surface: '#283044'
  outline: '#8c909f'
  outline-variant: '#424754'
  surface-tint: '#adc6ff'
  primary: '#adc6ff'
  on-primary: '#002e6a'
  primary-container: '#4d8eff'
  on-primary-container: '#00285d'
  inverse-primary: '#005ac2'
  secondary: '#b7c8e1'
  on-secondary: '#213145'
  secondary-container: '#3a4a5f'
  on-secondary-container: '#a9bad3'
  tertiary: '#4edea3'
  on-tertiary: '#003824'
  tertiary-container: '#00a572'
  on-tertiary-container: '#00311f'
  error: '#ffb4ab'
  on-error: '#690005'
  error-container: '#93000a'
  on-error-container: '#ffdad6'
  primary-fixed: '#d8e2ff'
  primary-fixed-dim: '#adc6ff'
  on-primary-fixed: '#001a42'
  on-primary-fixed-variant: '#004395'
  secondary-fixed: '#d3e4fe'
  secondary-fixed-dim: '#b7c8e1'
  on-secondary-fixed: '#0b1c30'
  on-secondary-fixed-variant: '#38485d'
  tertiary-fixed: '#6ffbbe'
  tertiary-fixed-dim: '#4edea3'
  on-tertiary-fixed: '#002113'
  on-tertiary-fixed-variant: '#005236'
  background: '#0b1326'
  on-background: '#dae2fd'
  surface-variant: '#2d3449'
typography:
  display-lg:
    fontFamily: Hanken Grotesk
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
    letterSpacing: -0.02em
  display-lg-mobile:
    fontFamily: Hanken Grotesk
    fontSize: 24px
    fontWeight: '700'
    lineHeight: 32px
    letterSpacing: -0.01em
  headline-xl:
    fontFamily: Hanken Grotesk
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
    letterSpacing: -0.015em
  headline-lg:
    fontFamily: Hanken Grotesk
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Hanken Grotesk
    fontSize: 16px
    fontWeight: '600'
    lineHeight: 24px
    letterSpacing: -0.005em
  headline-sm:
    fontFamily: Hanken Grotesk
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0em
  body-lg:
    fontFamily: Geist
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
    letterSpacing: 0em
  body-md:
    fontFamily: Geist
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
    letterSpacing: 0em
  body-sm:
    fontFamily: Geist
    fontSize: 12px
    fontWeight: '400'
    lineHeight: 16px
    letterSpacing: 0.01em
  label-md:
    fontFamily: Geist
    fontSize: 13px
    fontWeight: '500'
    lineHeight: 18px
    letterSpacing: 0.01em
  label-sm:
    fontFamily: Geist
    fontSize: 11px
    fontWeight: '600'
    lineHeight: 14px
    letterSpacing: 0.03em
  code-sm:
    fontFamily: Geist
    fontSize: 12px
    fontWeight: '400'
    lineHeight: 16px
    letterSpacing: 0em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  space-2xs: 0.125rem
  space-xs: 0.25rem
  space-sm: 0.5rem
  space-md: 0.75rem
  space-base: 1rem
  space-lg: 1.25rem
  space-xl: 1.5rem
  space-2xl: 2rem
  space-3xl: 3rem
  gutter-compact: 0.5rem
  gutter-default: 1rem
  margin-page: 1.5rem
---

## Brand & Style
The design system delivers an executive-grade operational environment engineered for enterprise productivity, task orchestration, and high-density data management. Designed to evoke effortless command, surgical precision, and uncompromised focus, the visual style combines deep architectural slate backdrops with sharp micro-borders and high-contrast typographic hierarchy.

Rooted in a calibrated modern dark aesthetic, the interface minimizes ocular fatigue across extended monitoring shifts while maximizing scan speed across complex data grids, kanban boards, and timeline views. Elements prioritize information density without visual clutter, relying on strict proportional containment, purposeful color telemetry, and subtle optical depth.

## Colors
The palette leverages a deep obsidian and slate foundation accented by a calibrated primary blue and functional semantic indicators:

- **Surface & Backgrounds**: Grounded in `#0B0F19` (base canvas), `#0F172A` (surface default), `#1E293B` (surface raised/cards), and `#334155` (surface active/hover).
- **Primary Accent (`#3B82F6`)**: Reserved for primary calls-to-action, key focus rings, active view indicators, and high-priority interactive states.
- **Secondary Slate (`#64748B`)**: Drives structural framing, neutral status badges, meta-information, and secondary controls.
- **Semantic Telemetry**:
  - **Success / Completed (`#10B981`)**: Selesai status indicators, positive metrics, check confirmations.
  - **Warning / Medium Priority (`#F59E0B`)**: Sedang status indicators, pacing warnings, approaching deadlines.
  - **Critical / High Priority (`#EF4444`)**: Tinggi/Mendesak indicators, blocker alerts, overdue milestones.
  - **Information (`#38BDF8`)**: In-progress operational tags, collaborator highlights.

Text hierarchies maintain high contrast: Primary text at `#F8FAFC`, secondary descriptive text at `#94A3B8`, and disabled/placeholder content at `#475569`.

## Typography
Typographic rhythm combines structural command headings using Hanken Grotesk with the technical clarity of Geist for dense data consumption.

- **Headlines (Hanken Grotesk)**: Provide assertive, modern structural anchors for page titles, modal headers, section breakouts, and summary dashboards. Negative tracking ensures crisp geometry at large sizes.
- **Body & Data (Geist)**: Designed for micro-legibility within dense tabular lists, nested task trees, subtask descriptions, and timeline dependencies. Neutral vertical metrics prevent vertical drift across multi-column enterprise layouts.
- **Micro Labels & Badges**: Set in `label-sm` with slight positive tracking to ensure immediate status recognition in Indonesian status tags (`SELESAI`, `TERTUNDA`, `DALAM PROSES`, `PRIORITAS TINGGI`).

## Layout & Spacing
The layout follows a fluid-hybrid architecture tailored for enterprise density, balancing a persistent collapsible sidebar navigation (fixed 260px expanded, 64px collapsed) with a fully responsive dynamic work canvas.

- **Grid Framework**: 12-column adaptive fluid grid for analytic dashboards, switching to CSS Grid sub-panels for kanban task lanes and multi-column tabular spreadsheets.
- **Responsive Adaptations**:
  - **Desktop (≥ 1280px)**: Full multi-pane workflow (Sidebar, Task List/Kanban, and Inspector Slide-over Panel active simultaneously). Standard gutter of 16px (`gutter-default`).
  - **Tablet (768px - 1279px)**: Inspector collapses to an overlay modal; sidebar collapses to icon-only navigation rail. Task board shifts to horizontal scroll.
  - **Mobile (< 768px)**: Single-pane stack with bottom navigation sheet. Margins compress to 12px; task rows compress vertically with swipeable action gestures.
- **Spatial Rhythm**: A strict 4px/8px coordinate base maintains vertical alignment across input fields, table rows (standard 36px dense, 48px standard), and avatar stacks.

## Elevation & Depth
Depth in the interface is expressed through precise planar luminosity and micro-borders rather than diffuse shadows, preventing muddiness on dark displays:

- **Level 0 (Base Canvas - `#0B0F19`)**: Structural ground for the application shell.
- **Level 1 (Card & Section Containers - `#0F172A`)**: Defined by a continuous 1px micro-border (`rgba(255, 255, 255, 0.08)`) with zero blur shadow.
- **Level 2 (Active/Hovered Elements & Popovers - `#1E293B`)**: 1px micro-border (`rgba(255, 255, 255, 0.12)`) supported by an ultra-subtle directional drop shadow: `0 4px 12px -2px rgba(0, 0, 0, 0.5)`.
- **Level 3 (Modals & Command Palettes - `#1E293B`)**: Highlighted top edge highlight (`1px inset rgba(255, 255, 255, 0.15)`), 1px outer frame (`rgba(59, 130, 246, 0.3)`), and high-diffusion shadow: `0 16px 32px -4px rgba(0, 0, 0, 0.7)`.

## Shapes
Adhering to roundedness level 1, the shape language embodies a sharp, calibrated instrument feel:

- **Base Radius (4px / 0.25rem)**: Standard inputs, data table rows, task cards, button controls, and status chips.
- **Container Radius (8px / 0.5rem - `rounded-lg`)**: Primary board lanes, dialog boxes, settings cards, and floating drawer panels.
- **Contextual Radius (12px / 0.75rem - `rounded-xl`)**: Global workspace shells and large modal backplates.
- **Circular Components**: Reserved strictly for collaborator avatars and quick-add floating action triggers to contrast sharply against rectangular data structures.

## Components

### Buttons
- **Primary**: Background `#3B82F6`, hover `#2563EB`, text `#FFFFFF`. 4px radius, height 36px (compact) or 40px (standard). Inset top-edge border for subtle tactile definition.
- **Secondary / Outline**: Background transparent, border 1px solid `rgba(255, 255, 255, 0.12)`, text `#F8FAFC`. Hover background `rgba(255, 255, 255, 0.04)`.
- **Destructive**: Background `rgba(239, 68, 68, 0.1)`, border 1px solid `rgba(239, 68, 68, 0.3)`, text `#F87171`. Hover background `rgba(239, 68, 68, 0.2)`.

### Chips & Status Tags
- Monospaced or semi-bold `label-sm` text with a 4px corner radius and 1px matching border.
- **Selesai (Completed)**: Background `rgba(16, 185, 129, 0.12)`, text `#34D399`, border `rgba(16, 185, 129, 0.25)`.
- **Sedang Dikerjakan (In Progress)**: Background `rgba(59, 130, 246, 0.12)`, text `#60A5FA`, border `rgba(59, 130, 246, 0.25)`.
- **Tertunda (Pending/Warning)**: Background `rgba(245, 158, 11, 0.12)`, text `#FBBF24`, border `rgba(245, 158, 11, 0.25)`.
- **Mendesak (Urgent Priority)**: Background `rgba(239, 68, 68, 0.15)`, text `#F87171`, border `rgba(239, 68, 68, 0.35)`.

### Form Controls (Inputs, Checkboxes, Radios)
- **Text Inputs**: Surface `#0F172A`, border 1px solid `rgba(255, 255, 255, 0.1)`, text `#F8FAFC`, placeholder `#475569`. Focus state applies a 1px border `#3B82F6` with an optical ring `0 0 0 2px rgba(59, 130, 246, 0.2)`.
- **Checkboxes**: 16x16px square with a 3px radius. Inactive border `rgba(255, 255, 255, 0.2)`. Checked state transitions to `#3B82F6` with a crisp white checkmark SVG.
- **Radio Buttons**: 16px circular boundary with a centered active pip (6px) in `#3B82F6`.

### Cards & Data Tables
- **Task Cards**: Background `#0F172A`, 4px radius, 1px solid `rgba(255, 255, 255, 0.08)`. Hover state brightens surface to `#1E293B` and transitions border to `rgba(255, 255, 255, 0.16)`. Left border can be optionally color-coded by priority.
- **Data Tables**: Zero-margin cell borders using `rgba(255, 255, 255, 0.06)`. Header rows feature uppercase `label-sm` tracking with subtle sorting indicators. Row hover states activate a background tint of `rgba(255, 255, 255, 0.02)`.

### Collaboration & Avatars
- **Avatar Stacks**: Overlapping circular portraits with -8px horizontal margin. Each avatar features a 2px outer ring matching the parent card surface (`#0F172A` or `#1E293B`) to prevent blend-in. Overflow badge (`+4`) styled in slate secondary.